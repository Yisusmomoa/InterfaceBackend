<?php 

session_start();
include_once "conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

if(isset($_REQUEST["AgregarDescuento"])){
    $IdProdDesc=$_POST["productoDesc"];
    $Descuento=$_POST["Descuento"];
    $cnsultaDescuento="UPDATE producto SET Descuento=$Descuento,Oferta=1
    WHERE IdProducto=$IdProdDesc";
      $con=mysqli_connect('localhost', 'root', '', 'discorder1');
    $resultado=mysqli_query($con, $cnsultaDescuento);
    if($resultado){
        echo "successfully !";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($con);
    }
}
else{
    echo ".l.";
}


?>