<?php

session_start();

//require_once  '../modelos/VerifyEmail.class.php' ; //Incluir el archivo de biblioteca 
include_once "../bd/conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

$idUs=$_POST['idUs'];
$TotalVenta=$_POST['TotalVenta'];
$dataCarrito="";
$con=mysqli_connect('localhost', 'root', '', 'discorder1');
 $consultaTraerCarrito="SELECT * from carrito WHERE IdUsCarritoFK=$idUs;";
 $resultado=mysqli_query($con, $consultaTraerCarrito);//ImgCateg

 $dataCarrito=mysqli_fetch_assoc($resultado);

//guardo el carrito 

$consultaInsertVenta="INSERT INTO venta (TotalVenta,IdClienteVentaFK) 
VALUES ($TotalVenta, $idUs)";
// $con=mysqli_connect('localhost', 'root', '', 'discorder1');
$resultado=mysqli_query($con, $consultaInsertVenta);
//inserto la venta 

// Obtener el último id de inserción
$lastidventa = mysqli_insert_id($con); 

// $consultaCarrito="SELECT * from carrito WHERE IdUsCarritoFK= $idUs";

// $con=mysqli_connect('localhost', 'root', '', 'discorder1');
// $idus=$_SESSION['s_usuario'][0]['IdUsuario'];
$consulta="SELECT * from carrito WHERE IdUsCarritoFK=$idUs;";
$resultadocarrito2=mysqli_query($con, $consulta);//ImgCateg

while ($row=mysqli_fetch_assoc($resultadocarrito2)){
    $cantidadCarr=$row["Cantidad"];
    $idprodCarr=$row["IdProdCarritoFK"];
    $consultaInsertDetallesVenta="INSERT INTO detalleventa
    (UnidadesVenta, IdVentaDetalleVentaFK, IdProductoDetalleVentaFK) 
    VALUES ($cantidadCarr,$lastidventa,$idprodCarr)";

    $resultado=$conexion->prepare($consultaInsertDetallesVenta);
    $resultado->execute();

    $consultaDeleteFromCarrito="DELETE FROM carrito WHERE IdUsCarritoFK =$idUs";
    $resultado=$conexion->prepare($consultaDeleteFromCarrito);
    $resultado->execute();
}

echo json_encode($dataCarrito);






?>