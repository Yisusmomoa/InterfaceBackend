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
        $PrecioProducto=$_POST['PrecioProducto'];
        

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

      

        // //imagen ruta
        $nombreimagenMIN=$_FILES['foto']['name'];
        $tipoimagenMIN=$_FILES['foto']['type'];
        $tamañoimagenMIN=$_FILES['foto']['size'];

        $nombre_imagenMAX=$_FILES['foto2']['name'];
        $tipoimagenMIN=$_FILES['foto2']['type'];
        $tamañoimagenMIN=$_FILES['foto2']['size'];
        

         //FOTO1
         //ruta de la carpeta destino
         $carpetaDestino=$_SERVER['DOCUMENT_ROOT']."/php/DiscOrder3/ImagenesServidor/";
        
         echo '<br>';
         echo $carpetaDestino;
         //movemos la imagen del directorio temporal al directorio escogido
         move_uploaded_file($_FILES['foto']['tmp_name'], $carpetaDestino.$nombreimagenMIN);

        //FOTO2
        //ruta de la carpeta destino
        $carpetaDestino2=$_SERVER['DOCUMENT_ROOT']."/php/DiscOrder3/ImagenesServidor/";
        echo '<br>';
        echo $carpetaDestino2;
        //movemos la imagen del directorio temporal al directorio escogido
        move_uploaded_file($_FILES['foto2']['tmp_name'], $carpetaDestino2.$nombre_imagenMAX);


        //  //imagen ruta
        
        $sql = "INSERT INTO producto(NombreProducto, DescripcionProducto,
                            StockProducto, IdAutorFK,
                            IdCategFK,IdGeneroFK, Precio, ImgProdMax, ImgProdMin, ImgProdMaxRuta, ImgProdMinRuta)
        VALUES ('$NombreProducto','$DescripcionProducto','$StockProducto',
        '$selectIdAutor','$selectIdCateg', '$selectIdGenero',
        '$PrecioProducto', '$binariosImagen', '$binariosImagen2', '$nombreimagenMIN', '$nombre_imagenMAX');";
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