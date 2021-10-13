<?php

session_start();

include_once "conexion.php";
$objeto= new Conexion();


$conexion=$objeto->Conectar();
 
//recpeción de los datos enviados mediante el método post de ajax

$usuario=(isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password=(isset($_POST['password'])) ? $_POST['password'] : '';
echo $usuario;
echo $password;

$consulta="SELECT * FROM usuario 
WHERE Username = '$usuario' AND Contraseña= '$password' ;";

//select u.IdUsuario, u.Username, u.Correo, u.Contraseña, count(*) as 'numeroprods' from carrito c join usuario u on u.IdUsuario=c.IdUsCarritoFK WHERE u.Username='Admin3' AND u.Contraseña='Admin3';
// $consulta="SELECT u.IdUsuario, u.Username, u.Correo, u.Contraseña, count(*) as 'numeroprods' 
// from carrito c join usuario u on u.IdUsuario=c.IdUsCarritoFK WHERE u.Username='$usuario' AND u.Contraseña='$password';";


$resultado=$conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount()>=1){
/*$dir = array();
$cont = 0;
while ($row = @mysqli_fetch_array($result)) {
   $dir[$cont] = $row['direccion'];
   $cont++;
}*/

    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

    // //para el carrito
    $nuevo=array(
    'productoscarro' => array(
        "idProd"=>'',
        "nombreProd"=>'',
        "cantidadProd"=>'' )
    );
    
    $_SESSION["s_usuario"]=$data;
    $_SESSION['s_usuario'][0]['Username'];

    //$_SESSION["s_usuario"][]=$nuevo;//para el carrito
    $idUsfav=$_SESSION['s_usuario'][0]['IdUsuario'];
    $consultaprodsfavOferta="SELECT * FROM producto p
    JOIN favorito fav ON p.IdProducto=fav.IdProductoFav
    WHERE fav.IdUsuarioFav= $idUsfav AND p.Oferta=1;";
    $con=mysqli_connect('localhost', 'root', '', 'discorder1');
    $resultadofavs=mysqli_query($con, $consultaprodsfavOferta);
    $row_cnt = $resultadofavs->num_rows;

    if($row_cnt>=1){
        $correoFavs=$_SESSION['s_usuario'][0]['Correo'];
        $asunt="Productos en rebaja";
        // $arrays = array();
        // $indice=0;
        // while ($row=mysqli_fetch_assoc($resultado)){
        //     $arrays[$indice]=$row;
        //     $indice++;
        // }
        $emailBody="";
        // chunk_split(base64_encode(file_get_contents($fileAttachment)));
        // <img src="data:image/jpg;base64,"'.base64_encode($row['ImgProdMin']).'"
        while ($row=mysqli_fetch_assoc($resultadofavs)){
            $DescuentoDecimal=$row["Descuento"]/100;
            $DescuentoaAplicar=$row["Precio"]*$DescuentoDecimal;
            $nuevoPrecio=$row["Precio"]-$DescuentoaAplicar;
            $emailBody.= '<div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="data:image/jpg;base64,"'.base64_encode($row['ImgProdMin']).'"
                     class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">'.$row["NombreProducto"].'</h4>
                        <div class="precios">
                            <h5 class="card-text">'.$row["Precio"].'</h5>
                            <h3 class="card-text">'.$nuevoPrecio.'</h3>
                        </div>
                        <div class="BotonIrDiscord">
                            <button>Ir a DiscOrder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>';   }
      
            $message="
            <html>
                    <head>
                        <title>Document</title>
                        <style>
                            article{
                                font-family:serif;
                                border: 1px solid #333311;
                                margin: 0 auto;
                                width: 80%;
                                margin-top: 3rem;
                                background-color: rgba(160, 160, 160, 0.308);
                            }
                            article>h3{
                                margin-top: 20px;
                                text-align: center;
                                color: white;
                                font-weight:lighter;
                            }
                            section{
                                position: relative;
                                background-color: white;
                                box-shadow:
                                0 -3em 3em rgba(0,0,0,0.1),
                                    0 0  0 2px rgb(255,255,255),
                                    0.3em 0.3em 1em rgba(0,0,0,0.3);
                                margin: 0 auto;
                            
                                width: 50%;
                                border-radius: 2px;
                                margin-top: 20px;
                                margin-bottom: 20px;
                            
                            }
                            section >p b{
                                font-size: 17px;
                            }
                            
                            section b>p{
                                font-size: 20px;
                            
                            }
                            section b>p b{
                                font-size: 35px;
                                text-decoration:underline;
                            }
                            
                            section img{
                                
                                /*Centrar imagen*/
                                display: block;
                                margin: 0 auto;
                                /*Centrar imagen*/
                                width: 75%;
                                height: auto;
                                margin-bottom: 20px;
                            }
                            .BotonIrDiscord button{
                                margin: 0 auto;
                                display: block;
                                
                            }
                            
                            button {
                                color: #ffff;
                                background-color: #555555; 
                                border: none;
                                padding: 15px 35px;
                                text-align: center;
                                text-decoration: none;
                            
                                font-size: 20px;
                                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2),
                                0 6px 20px 0 rgba(0,0,0,0.19);
                            }
                            
                            
                            
                            .card{
                                margin: 0 auto;
                            
                            }
                            
                            .row{
                                margin: 0 auto;
                                
                            }
                            
                            hr{
                                width: 80%;
                                margin: 0 auto;
                            }
                            #logo{
                                position: relative;
                                width: 80px;
                                height: 80px;
                                right: 35%;
                            }
                            .cabeceraoferta{
                                background-color: #303030e0;
                                color: white;
                            }
                            .cabeceraoferta h4{
                                text-align: center;
                            }
                            .cabeceraoferta h1{
                                color: yellow;
                                text-align: center;
                            }
                            .row .col-md-4 img{
                                margin-top: 15px;
                                height: 200px;
                                width: 100%;
                                margin-left: 15px;
                                margin-right: 15px;
                            }
                            
                            .card-body{
                                margin-top: 40px;
                                position: relative;
                                left: 10%;
                                width: 80%;
                                display: block;
                            }
                            
                            .card-body .card-title {
                                font-weight: 900;
                            }
                            .card-body .precios h5{
                                text-decoration: line-through;
                            }
                            .card-body .precios h3{
                                color:yellow;
                            }
                            .card-body .precios .card-text{
                                color: rgb(2, 0, 0);
                                display: inline-block;
                                margin-right: 30px;
                                
                            }
                    
                        </style>
                    </head>
                    <body>
                        <article>
                            <h3><i class='fas fa-compact-disc'></i> DiscOrder</h3>
                            <section>
                                <div class='cabeceraoferta'>
                                <img  id='logo' src='https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2a8158c9-a41d-4f6c-b552-cda0087e5087/deqbqsh-63ed886b-e492-4956-b2e1-9f6bbf519053.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzJhODE1OGM5LWE0MWQtNGY2Yy1iNTUyLWNkYTAwODdlNTA4N1wvZGVxYnFzaC02M2VkODg2Yi1lNDkyLTQ5NTYtYjJlMS05ZjZiYmY1MTkwNTMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.uv5UC2CHuawSbijNaEVCjPVJF6H9FtjoorCe0Q3n3aI' alt='porque no jala T-T'>
                                    <hr>
                                    <br>
                                    <h1>NEW PRICES!</h1>
                                    <br>
                                    <h4>YOUR FAVOURITE GAMES:</h4>
                                    <br> 
                                </div>
                                <br>";
                               
                                $message.=$emailBody;
            $mesaggefooter="                  
                                <br>
                            </section>
                        
                        </article>
                  
                    </body>
            </html>";
            $message.=$mesaggefooter;
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $mailenviado=mail($correoFavs, $asunt, $message,$headers);
        }     
} 
else{
    $_SESSION["s_usuario"]=null;
    $data=null;
}

print json_encode($data);

$conexion=null;






?>