<?php

session_start();

include_once "../bd/conexion.php";
$objeto= new Conexion();


$conexion=$objeto->Conectar();
 
$idprod=$_POST["idprod"];


$data="";
$con=mysqli_connect('localhost', 'root', '', 'discorder1');

$consultacantidad="UPDATE producto `Descuento`='[value-12]',
`Oferta`='[value-13]' WHERE IdProducto =$idprod";

