<?php

session_start();

include_once "conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

$usuario=(isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password=(isset($_POST['password'])) ? $_POST['password'] : '';
$correo=(isset($_POST['email'])) ? $_POST['email'] : '';

$consulta="INSERT INTO usuario(Username,Correo,Contraseña) VALUES('$usuario','$correo', '$password'); ";
$asunt="Registro a DiscOrder";


$header="From: noreply@example.com"."\r\n";
$header.="Reply-To: noreply@example.com"."\r\n";
$header.="X-Mailer: PHP/".phpversion();
 

$MensajeCompleto="Bienvenido a DiscOrder, disfruta de la mejor musica con nosotros y bla bla bla correo registrado ".$correo." con nombre de usuario".$usuario; 

$resultado=$conexion->prepare($consulta);
//$resultado->execute();

if($resultado->execute()){
    $mailenviado=mail($correo,$asunt,$MensajeCompleto, $header);
    if($mailenviado){
        $data="registrado";
    }
    else{
        $data="null";
    }
  
    
}
else{
    $data="null";
}

?>