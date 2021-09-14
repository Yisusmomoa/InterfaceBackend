<?php
include_once "../bd/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   if(isset($_GET["IdProducto"])){
        $id=$_GET["IdProducto"];
        $objeto= new Conexion();
        $conexion=$objeto->Conectar();
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
    
        $consulta="SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero from producto p JOIN categoria c on c.IdCateg=p.IdCategFK JOIN autor a on a.IdAutor= p.IdAutorFK JOIN genero g on g.IdGenero=p.IdGeneroFK;";
        

        $resultado=mysqli_query($con, $consulta);
        //$resultado=$conexion->prepare($consulta);
        //$resultado->execute();
        $data=mysqli_fetch_assoc($resultado);
    ?>
        <?php  
             echo "IdProducto: ". $data["IdProducto"];
             echo "<br>";
             echo "NombreProducto: ".$data["NombreProducto"];
             echo "<br>";
             echo "DescripcionProducto:".$data["DescripcionProducto"];
             echo "<br>";
             echo "IdAutorFK:".$data["IdAutorFK"];
             echo "<br>";
             echo "IdCategFK:".$data["IdCategFK"];
             echo "<br>";
             echo "IdGeneroFK:".$data["IdGeneroFK"];
             echo "<br>";
             echo "NombreCateg:".$data["NombreCateg"];
             echo "<br>";
             echo "NombreGenero:".$data["NombreGenero"];
             echo "<br>";
             echo "NombreAutor:".$data["NombreAutor"];
             echo "<br>";
             
        ?>
        <p><?php echo "ImgProdMin: "?></p>
        <img width="50px" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($data['ImgProdMin'])?>" >
        <br>
        <p><?php echo "ImgProdMax: "?></p>
        <img width="50px" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($data['ImgProdMax'])?>" >
        <br>
        <?php
   } 
   else {
       echo ".l."; 
        }
  ?>
  
</body>
</html>