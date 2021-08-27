<?php


session_start();


$con=mysqli_connect('localhost','root', '');

mysqli_select_db($con, 'discorder1');

$Username= $_POST['UsernameLogin'];

$Contraseña= $_POST['ContraseñaLogin'];

$s="SELECT * FROM usuario WHERE Username= '$Username' AND Contraseña ='$Contraseña'";

$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['Username']=$Username;
    $_SESSION['Contraseña']=$Contraseña;
    //$_SESSION['Correo']=$Correo;
    header('location: ../html/index.php');
}



