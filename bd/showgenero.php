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
     
   if(isset($_GET["IdGenero"])){
        $id=$_GET["IdGenero"];
        $objeto= new Conexion();
        $conexion=$objeto->Conectar();
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
    
        $consulta="SELECT * FROM genero WHERE IdGenero ='$id'";

        $resultado=mysqli_query($con, $consulta);
        //$resultado=$conexion->prepare($consulta);
        //$resultado->execute();
        $data=mysqli_fetch_assoc($resultado);
        ?>
        <?php  
       
           
             echo "id Genero: ". $data["IdGenero"];
             echo "<br>";
             echo "Nombre Genero: ".$data["NombreGenero"];
             echo "<br>";
             echo "DescrGenero:".$data["DescrGenero"];
             echo "<br>";
             ?>

<img src="data:image/jpg;base64,<?php echo base64_encode($data['ImgGenero'])?>" >
    



        

<?php
   } 
   else {
       echo ".l."; 
   }
  ?>
  
</body>
</html>