<?php
session_start();

include_once "../bd/conexion.php";
$objeto= new Conexion();


$conexion=$objeto->Conectar();
 
$idpordcant=$_POST["idpordcant"];
$iduscant=$_POST['iduscant'] ;
$cantidadprod=$_POST['cantidadprod'];
$data="";
$con=mysqli_connect('localhost', 'root', '', 'discorder1');

$consultacantidad="SELECT Cantidad from carrito
WHERE IdUsCarritoFK= $iduscant AND IdProdCarritoFK=$idpordcant;";

$resultado=mysqli_query($con, $consultacantidad);//ImgCateg

$data=mysqli_fetch_assoc($resultado);
$NuevaCantidad=0;

$NuevaCantidad=$cantidadprod+1;

//echo $NuevaCantidad;

$ActualizaCantidad="UPDATE carrito SET Cantidad =$NuevaCantidad
WHERE IdUsCarritoFK= $iduscant AND IdProdCarritoFK=$idpordcant;";

$resultado=mysqli_query($con, $ActualizaCantidad);//ImgCateg

$data=mysqli_fetch_assoc($resultado);


print_r($NuevaCantidad);

//echo json_encode($data);


// $consultacantidad="SELECT Cantidad from carrito
// WHERE IdUsCarritoFK= $iduscant AND IdProdCarritoFK=$idpordcant;";
  
// $resultado=$conexion->prepare($consultacantidad);

// if($resultado->execute()){
//     $data=$resultado;
//       echo json_encode($data);
// }
// else{
//     $data=null;
// }

//print json_encode($data);
//$conexion=null;




?>