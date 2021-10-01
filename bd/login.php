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

$consulta="SELECT * FROM usuario WHERE Username = '$usuario' AND Contraseña= '$password' ;";

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
   

} 
else{
    $_SESSION["s_usuario"]=null;
    $data=null;
}

print json_encode($data);

$conexion=null;






?>