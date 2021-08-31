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

$resultado=$conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount()>=1){
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"]=$usuario;
} 
else{
    $_SESSION["s_usuario"]=null;
    $data=null;
}

print json_encode($data);

$conexion=null;






?>