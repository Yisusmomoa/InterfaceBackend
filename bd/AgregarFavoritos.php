<?php

session_start();

//require_once  '../modelos/VerifyEmail.class.php' ; //Incluir el archivo de biblioteca 
include_once "../bd/conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

$IdUsuarioFav=$_POST['IdUsuarioFav'];
$IdProductoFav=$_POST['IdProductoFav'] ;



 $consultaYaEstaEnCarrito="CALL InsertFavoritos($IdUsuarioFav,$IdProductoFav);";

// $consultaYaEstaEnCarrito="
// IF (SELECT EXISTS(SELECT 1 FROM  Favorito WHERE IdUsuarioFav =$IdUsuarioFav AND IdProductoFav=$IdProductoFav)=0)  THEN
//    INSERT INTO favorito
// 	(`IdUsuarioFav`,
// 	`IdProductoFav`)
// 	VALUES
// 	($IdUsuarioFav,
// 	$IdProductoFav);
// ELSE
// 	DELETE FROM favorito
// 	WHERE IdUsuarioFav=$IdUsuarioFav AND IdProductoFav=$IdProductoFav
    
// END IF;";
$con=mysqli_connect('localhost', 'root', '', 'discorder1');

//$resultado=$conexion->prepare($consultaYaEstaEnCarrito);

$resultado=mysqli_query($con, $consultaYaEstaEnCarrito);//ImgCateg

$data=mysqli_fetch_assoc($resultado);

print json_encode($data);

// $resultado->execute();
//   if($resultado){
//     $data=$resultado;
//     print_r($data,true);
//   }
//   else{
//     $data=$resultado;
//     print_r($data,true);
//   }


//   fetch_assoc













//   session_start();

//   //require_once  '../modelos/VerifyEmail.class.php' ; //Incluir el archivo de biblioteca 
//   include_once "../bd/conexion.php";
//   $objeto= new Conexion();
//   $conexion=$objeto->Conectar();
  
//   $IdUsuarioFav=$_POST['IdUsuarioFav'];
//   $IdProductoFav=$_POST['IdProductoFav'] ;
  
  
//   $ConsultaSiYaEsFavorito="SELECT * FROM favorito WHERE IdUsuarioFav=$IdUsuarioFav AND IdProductoFav=$IdProductoFav";
  
//   $resultado=$conexion->prepare($ConsultaSiYaEsFavorito);
//   $resultado->execute();
//   $row_cnt = $resultado->rowCount();
//   $data=$row_cnt;
  
//   if($data>0){
//   $consultaYaEsta="DELETE FROM favorito WHERE IdUsuarioFav=$IdUsuarioFav AND IdProductoFav=$IdProductoFav";
//   $resultado=$conexion->prepare($consultaYaEsta);
//   $resultado->execute();
  
//   }
//   else{
  
//   }



?>