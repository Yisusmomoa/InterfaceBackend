<?php
     include_once "../bd/conexion.php";
     $objeto= new Conexion();
     $conexion=$objeto->Conectar();
     $con=mysqli_connect('localhost', 'root', '', 'discorder1');
    
    
     $ConsultaProdsSinOferta="SELECT * FROM producto WHERE Oferta=0";
    
     $resultadoProdsSinOferta=mysqli_query($con, $ConsultaProdsSinOferta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Oferta</title>
</head>
<body>

    <form action="../bd/InsertOferta.php" method="post">
        <label for="">Descuento: </label>
        <input type="number" name="Descuento" id="" min="10" max="70">
        <br>
        <label for="">Seleciona un producto </label>
        <select id="comboboxordenarpor" name="productoDesc" 
        class="form-select form-select-sm" aria-label=".form-select-sm example">
            <?php 
                while($row=mysqli_fetch_assoc($resultadoProdsSinOferta)){
            ?>
                <option value="<?php echo $row["IdProducto"]; ?>">
                    <?php echo $row["NombreProducto"];?>
                </option>
            <?php 
                }
            ?>
        </select>
        <br>
        <input type="submit" value="Submit" name="AgregarDescuento">
    </form>
    
</body>
</html>