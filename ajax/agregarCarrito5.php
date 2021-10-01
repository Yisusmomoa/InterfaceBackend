<?php

session_start();

//require_once  '../modelos/VerifyEmail.class.php' ; //Incluir el archivo de biblioteca 
include_once "../bd/conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

$idProd=$_POST['idprod'];
$idUs=$_POST['idUs'] ;
$Cantidad=$_POST['Cantidad'] ;

$consultaYaEstaEnCarrito="SELECT * from carrito 
WHERE IdUsCarritoFK= $idUs AND IdProdCarritoFK=$idProd;";

  $resultado=$conexion->prepare($consultaYaEstaEnCarrito);
  $resultado->execute();
  $row_cnt = $resultado->rowCount();
  $data=$row_cnt;

if($data>0){
    $con=mysqli_connect('localhost', 'root', '', 'discorder1');

    $consultacantidad="SELECT Cantidad from carrito
    WHERE IdUsCarritoFK= $idUs AND IdProdCarritoFK=$idProd;";

    $resultado=mysqli_query($con, $consultacantidad);//ImgCateg

    $data=mysqli_fetch_assoc($resultado);
    $NuevaCantidad=0;

    $NuevaCantidad=$Cantidad+$data['Cantidad'];
    $consultanuevacantidad="UPDATE carrito SET Cantidad=$NuevaCantidad
     WHERE IdUsCarritoFK=$idUs AND IdProdCarritoFK=$idProd ";
    $resultado=$conexion->prepare($consultanuevacantidad);
    $resultado->execute();
}
else{

    $consulta="INSERT INTO carrito(IdProdCarritoFK, IdUsCarritoFK, Cantidad) 
    VALUES ($idProd,$idUs,$Cantidad)";
    $resultado=$conexion->prepare($consulta);
    $resultado->execute();
}
$data="";

    $consultacuentadeproductos="SELECT * from carrito WHERE IdUsCarritoFK= $idUs;";
    $resultado=$conexion->prepare($consultacuentadeproductos);
    $resultado->execute();
    $row_cnt = $resultado->rowCount();
    $data=$row_cnt;

print json_encode($data);

$conexion=null;


?>