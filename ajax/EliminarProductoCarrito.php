<?php

session_start();

include_once "../bd/conexion.php";
$objeto= new Conexion();


$conexion=$objeto->Conectar();
 
//recpeción de los datos enviados mediante el método post de ajax


    $idprod=$_POST["idprodcarrito"];
    $idUs=$_POST['iduseliminar'] ;
    
    echo $idprod;
    echo $idUs;

    $consulta="DELETE FROM carrito WHERE IdProdCarritoFK =$idprod AND IdUsCarritoFK = $idUs";
    
    
    $resultado=$conexion->prepare($consulta);
    $resultado->execute();


    $conexion=null;
    



