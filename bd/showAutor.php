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
     
   if(isset($_GET["IdAutor"])){
        $id=$_GET["IdAutor"];
        $objeto= new Conexion();
        $conexion=$objeto->Conectar();
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
    
        $consulta="SELECT * FROM autor WHERE IdAutor ='$id'";

        $resultado=mysqli_query($con, $consulta);
        //$resultado=$conexion->prepare($consulta);
        //$resultado->execute();
        $data=mysqli_fetch_assoc($resultado);
        ?>
        <?php  
       
           
             echo "id Autor: ". $data["IdAutor"];
             echo "<br>";
             echo "Nombre Autor: ".$data["NombreAutor"];
             echo "<br>";
             echo "Descr Autor:".$data["DescrAutor"];
             echo "<br>";
             ?>

<img src="data:image/jpg;base64,<?php echo base64_encode($data['ImgAuto'])?>" >
    



        

<?php
   } 
   else {
       echo ".l."; 
   }
  ?>
  
</body>
</html>