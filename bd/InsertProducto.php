<?php

session_start();
include_once "conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();

if(isset($_REQUEST['AgregarProducto'])){
    if(isset($_FILES['foto']['name']) && isset($_FILES['foto2']['name']) ){

        $NombreProducto=$_POST['NombreProducto'];
        $DescripcionProducto=$_POST['DescripcionProducto'];
        $StockProducto=$_POST['StockProducto'];
        //Selects
        $selectIdAutor=$_POST['selectIdAutor'];
        $selectIdCateg=$_POST['selectIdCateg'];
        $selectIdGenero=$_POST['selectIdGenero'];
     

       

        $tipoarchivo=$_FILES['foto']['name'];
        $nombrearchivo=$_FILES['foto']['name'];
        $tamanoarchivo=$_FILES['foto']['size'];
        $imagensubida=fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen=fread($imagensubida, $tamanoarchivo);
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
        $binariosImagen=mysqli_escape_string($con, $binariosImagen);

        $tipoarchivo2=$_FILES['foto2']['name'];
        $nombrearchivo2=$_FILES['foto2']['name'];
        $tamanoarchivo2=$_FILES['foto2']['size'];
        $imagensubida2=fopen($_FILES['foto2']['tmp_name'], 'r');
        $binariosImagen2=fread($imagensubida2, $tamanoarchivo2);
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
        $binariosImagen2=mysqli_escape_string($con, $binariosImagen2);
        
        $sql = "INSERT INTO producto(NombreProducto, DescripcionProducto,
                            StockProducto, IdAutorFK,
                            IdCategFK,IdGeneroFK, ImgProdMin, ImgProdMax)
        VALUES ('$NombreProducto','$DescripcionProducto','$StockProducto',
        '$selectIdAutor','$selectIdCateg', '$selectIdGenero',
        '$binariosImagen', '$binariosImagen2' )";
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