
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
        include_once "../bd/conexion.php";
        $objeto= new Conexion();
        $conexion=$objeto->Conectar();
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');


        $consulta="SELECT * FROM autor ";
        $resultado=mysqli_query($con, $consulta);

        while ($row=mysqli_fetch_assoc($resultado)) { 
    ?>
    <a href="../bd/showAutor.php?IdAutor=<?php echo $row["IdAutor"]; ?>"> 
    <img src="data:image/jpg;base64,<?php echo base64_encode($row['ImgAuto'])?>" >
    <p> <?php echo $row["IdAutor"]; ?></p>
    <p> <?php echo $row["NombreAutor"]; ?></p>
    </a>
       
    <?php
        }
        /*
            $resultado=$conexion->prepare($consulta);
            $resultado=mysqli_query($conexion, $consulta);
            $resultado->execute();
        */
    ?>
      
   

   
</body>
</html>