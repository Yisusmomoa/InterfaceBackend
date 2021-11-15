<?php
session_start();

//require_once  '../modelos/VerifyEmail.class.php' ; //Incluir el archivo de biblioteca 
include_once "conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

$usuario=(isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password=(isset($_POST['password'])) ? $_POST['password'] : '';
$correo=(isset($_POST['email'])) ? $_POST['email'] : '';


$consulta="INSERT INTO usuario(Username,Correo,Contraseña) 
VALUES('$usuario','$correo', '$password'); ";
$asunt="Registro DiscOrder";


$header="From: noreply@example.com"."\r\n";
$header.="Reply-To: noreply@example.com"."\r\n";
$header.="X-Mailer: PHP/".phpversion();
 

$MensajeCompleto="Bienvenido a DiscOrder, disfruta de la mejor musica con nosotros y bla bla bla correo registrado ".$correo." con nombre de usuario ".$usuario; 

/*
//verificar que exista un email

// Initialize library class
$mail = new VerifyEmail();

// Set the timeout value on stream
$mail->setStreamTimeoutWait(20);

// Set debug output mode
$mail->Debug= TRUE; 
$mail->Debugoutput= 'html'; 

// Set email address for SMTP request
$mail->setEmailFrom('correospambj@gmail.com');

// Email to check
$email = $correo; 
*/

$message = "
<html>
    <head>
    <!--font awesome-->
    <link rel='stylesheet' href='../css/all.min.css'>

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
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 20px 40px;
            text-align: center;
            text-decoration: none;
        
            font-size: 20px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2),
            0 6px 20px 0 rgba(0,0,0,0.19);
        }

        #eslogen{
            margin-top: 10px;
            font-size: 12px;
            font-weight:100;
            color: gray;
            text-align: center;
        }

    </style>
    </head>
    <body>


        <article>
            <h3><i class='fas fa-compact-disc'></i> DiscOrder</h3>
            <section>
                <p>Hola <b>".$usuario."</b> </p>
                <p>Bienvenido a DiscOrder, donde esperamos puedas encontrar lo que buscas en nuestra tienda</p>
                <b><p>Recuerda que en tu primera compra recibiras un producto de <b>regalo</b>  </p></b>
                <hr>
                <img src='https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2a8158c9-a41d-4f6c-b552-cda0087e5087/deqbqsh-63ed886b-e492-4956-b2e1-9f6bbf519053.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzJhODE1OGM5LWE0MWQtNGY2Yy1iNTUyLWNkYTAwODdlNTA4N1wvZGVxYnFzaC02M2VkODg2Yi1lNDkyLTQ5NTYtYjJlMS05ZjZiYmY1MTkwNTMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.uv5UC2CHuawSbijNaEVCjPVJF6H9FtjoorCe0Q3n3aI' alt='porque no jala T-T'>
                <div class='BotonIrDiscord'>
                    <button>Ir a DiscOrder</button>
                </div>
                <br>
            <p id='eslogen'>Somos especialistas en distribución discográfica. ¡Intenta ponernos a prueba!</p>
                <br>
            </section>
        
        </article>

    
    </body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$resultado=$conexion->prepare($consulta);
//$resultado->execute();
$data="";
    if($resultado->execute()){
        $mailenviado=mail($correo,$asunt,$message, $headers);
        if($mailenviado){
            
            $consulta="SELECT * FROM usuario 
            WHERE Username = '$usuario' AND Contraseña= '$password' ;";
            $resultado=$conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["s_usuario"]=$data;
            $data="registrado";
        }
        else{
            $data=null;
        }
    }
    else{
        $data=null;
    }


print json_encode($data);

$conexion=null;

?>