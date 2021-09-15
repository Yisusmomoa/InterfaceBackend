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
   if(isset($_REQUEST["nombre"])){
        $nombre=$_GET["nombre"];
        //echo $nombre;
        $objeto= new Conexion();
        $conexion=$objeto->Conectar();
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
    
        $consulta="SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero
         from producto p 
         JOIN categoria c on c.IdCateg=p.IdCategFK 
         JOIN autor a on a.IdAutor= p.IdAutorFK 
         JOIN genero g on g.IdGenero=p.IdGeneroFK 
         WHERE NombreProducto LIKE'%$nombre%';";
        

        $resultado=mysqli_query($con, $consulta);
        
        while ($row=mysqli_fetch_assoc($resultado)) { 
            ?>
            
            <a href="../bd/showProducto.php?IdProducto=<?php echo $row["IdProducto"]; ?>"> 
            <p><?php echo "ImgProdMin: "?></p>
            <img width="50px" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['ImgProdMin'])?>" >
            <p><?php echo "ImgProdMax: "?></p>
            <img width="50px" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['ImgProdMax'])?>" >
            <p> <?php echo "IdProducto: ".$row["IdProducto"]; ?></p>
            <p> <?php echo "NombreProducto: ".$row["NombreProducto"]; ?></p>
            <p> <?php echo "DescripcionProducto: ".$row["DescripcionProducto"]; ?></p>
            <p> <?php echo "IdAutorFK: ".$row["IdAutorFK"]; ?></p>
            <p> <?php echo "IdCategFK: ".$row["IdCategFK"]; ?></p>
            <p> <?php echo "IdGeneroFK: ".$row["IdGeneroFK"]; ?></p>
            <p> <?php echo "NombreCateg: ".$row["NombreCateg"]; ?></p>
            <p> <?php echo "NombreGenero: ".$row["NombreGenero"]; ?></p>
            <p> <?php echo "NombreAutor: ".$row["NombreAutor"]; ?></p>
            </a>
               <br>
        <?php
                }
               ?>
  <?php      
   } 
   else {
       echo ".l."; 
        }
  ?>
  
</body>
</html>