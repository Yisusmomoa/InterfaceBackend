<?php
//  session_start();

//  include_once "conexion.php";
//  $objeto= new Conexion();
//  $conexion=$objeto->Conectar();

//  $idprod=(isset($_POST['idprod'])) ? $_POST['idprod'] : '';
//  $idUs=(isset($_POST['idUs'])) ? $_POST['idUs'] : '';
//  $Cantidad=(isset($_POST['Cantidad'])) ? $_POST['Cantidad'] : '';
 
 
//  $consulta="INSERT INTO carrito(IdProdCarritoFK,IdUsCarritoFK,Cantidad) 
//  VALUES($idprod,$idUs, $Cantidad); ";
// $resultado=$conexion->prepare($consulta);
// //$resultado->execute();
// $data="";

// if($resultado->execute()){

// }
// else{
//     $data=null;
// }
// print json_encode($data);

// $conexion=null;
    //echo $_COOKIE['productos'];
    // $_COOKIE['productos']='';
    $productos=unserialize($_COOKIE['productos']??'');

    //$productos='';
    //$productos=$_COOKIE['productos']??'';
    echo '<br>';
    echo 'cookis: ';
    var_dump($_COOKIE['productos']);
    if(is_array($productos)==false){
        $productos=array();
    }

    $siYaEstaProducto=false;
    var_dump( $productos);
    $array_num = count($productos);
    //print_r( $_REQUEST);
    echo '<br>';
    echo '<br>';
    echo '<br>';

    for ($i = 1; $i < $array_num-1; ++$i){
        //print_r( $productos[$i]);
        //print_r($_REQUEST['id']);//aquí esta el error
        // echo '<br>';
        // echo $productos[$i]['id'];
        if($productos[$i]['id']==$_COOKIE['id']){
            echo "si entra";
            //  $productos[$i]['cantidad']= $productos[$i]['cantidad']+$_REQUEST['cantidad'];
             $siYaEstaProducto=true;
        }
    }

    if($siYaEstaProducto==false){
        $nuevo=array(
            "id"=>$_REQUEST["id"],
            "nombre"=>$_REQUEST["nombre"],
          
            "cantidad"=>$_REQUEST["cantidad"]
        );
        array_push($productos, $nuevo);
    }

     setcookie("productos",serialize($productos));
    echo json_encode($productos);

    // foreach ($productos as $key => $value) {
    //     echo '<br>';
    //     echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaa ";
    //     print_r($value);
    //     if($value['id']==$_REQUEST['id']){
    //         $productos[$key]['cantidad']= $productos[$key]['cantidad']+$_REQUEST['cantidad'];
    //         $siYaEstaProducto=true;
    //     }
    // }
    
    // if($siYaEstaProducto==false){
    //     $nuevo=array(
    //         "id"=>$_REQUEST["id"],
    //         "nombre"=>$_REQUEST["nombre"],
          
    //         "cantidad"=>$_REQUEST["cantidad"]
    //     );
    //     array_push($productos, $nuevo);
    // }

    // setcookie("productos",serialize($productos));
    // echo json_encode($productos);


?>