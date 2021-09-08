<?php

session_start();
include_once "conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

if(isset($_REQUEST['AgregarAutor'])){
    if(isset($_FILES['foto']['name'])){
        $NombreAutor=$_POST['NombreAutor'];
        $DescrAutor=$_POST['DescrAutor'];


        $tipoarchivo=$_FILES['foto']['name'];
        $nombrearchivo=$_FILES['foto']['name'];
        $tamanoarchivo=$_FILES['foto']['size'];
        $imagensubida=fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen=fread($imagensubida, $tamanoarchivo);
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
        $binariosImagen=mysqli_escape_string($con, $binariosImagen);
        $sql = "INSERT INTO autor(NombreAutor, ImgAuto, DescrAutor)
        VALUES ('$NombreAutor', '$binariosImagen', '$DescrAutor')";
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


?>