<?php

session_start();
include_once "conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

if(isset($_REQUEST['AgregarGenero'])){
    if(isset($_FILES['foto']['name'])){
        $NombreGenero=$_POST['NombreGenero'];
        $DescrGenero=$_POST['DescrGenero'];


        $tipoarchivo=$_FILES['foto']['name'];
        $nombrearchivo=$_FILES['foto']['name'];
        $tamanoarchivo=$_FILES['foto']['size'];
        $imagensubida=fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen=fread($imagensubida, $tamanoarchivo);
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
        $binariosImagen=mysqli_escape_string($con, $binariosImagen);
        $sql = "INSERT INTO genero(NombreGenero, ImgGenero, DescrGenero)
        VALUES ('$NombreGenero', '$binariosImagen', '$DescrGenero')";
        //$resultado=$conexion->prepare($sql);
        $resultado=mysqli_query($con, $sql);
        
         if($resultado){
            echo "successfully !";
        }
        else{
            echo "Error puto: " . $sql . "" . mysqli_error($conexion);
        }

    }
    

  
   
}
else{
    echo "no entra";
}
    /*
    ImgGenero
     $sql = "INSERT INTO genero(NombreGenero, ImgGenero, DescrGenero)VALUES ('$NombreGenero', '$file', '$DescrGenero')";
    $resultado=$conexion->prepare($sql);

    if ($resultado) {
        echo "successfully !";
    }
    else {
        echo "Error puto: " . $sql . "" . mysqli_error($conexion);
        }


        if(isset($_POST['AgregarGenero'])){
    $NombreGenero=$_POST['NombreGenero'];
    $DescrGenero=$_POST['DescrGenero'];
    $image=addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
    $sql = "INSERT INTO genero(NombreGenero, ImgGenero, DescrGenero)VALUES ('$NombreGenero', '$image', '$DescrGenero')";
    $resultado=$conexion->prepare($sql);

    if($resultado->execute()){
        echo "successfully !";
    }
    else{
        echo "Error puto: " . $sql . "" . mysqli_error($conexion);
    }
   
}
else{
    echo "no entra";
}
    */
    ?>