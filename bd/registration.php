<?php


session_start();


$con=mysqli_connect('localhost','root', '');

mysqli_select_db($con, 'discorder1');

$Username= $_POST['Username'];

$Correo= $_POST['Correo'];

$Contraseña= $_POST['Contraseña'];

$s="INSERT INTO usuario(Username,Correo,Contraseña) VALUES('$Username', '$Correo', '$Contraseña')";

mysqli_query($con, $s);

header('location: ../html/index.php');




