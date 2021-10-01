<?php
 include_once "../bd/conexion.php";
 $objeto= new Conexion();
 $conexion=$objeto->Conectar();
 $con=mysqli_connect('localhost', 'root', '', 'discorder1');


 $consultaGenero="SELECT * FROM genero ";
 $consultaAutor="SELECT * FROM autor ";
 $consultaCategoria="SELECT * FROM categoria ";

 $resultadoGenero=mysqli_query($con, $consultaGenero);
 $resultadoAutor=mysqli_query($con, $consultaAutor);
 $resultadoCategoria=mysqli_query($con, $consultaCategoria);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
</head>
<body>
    <?php echo $_SERVER['DOCUMENT_ROOT'] ?>
    <form method="POST" action="../bd/InsertProducto.php" enctype="multipart/form-data">
        <label for="">Nombre Producto</label>
        <input type="text" name="NombreProducto" id="NombreProducto">
        <br>
        <label for="">Precio Producto</label>
        <input type="text" name="PrecioProducto" id="PrecioProducto">
        <br>
        <label for="">ImgProducto</label>
        <input type="file" name="foto" >
        <br>  
        <label for="">ImgProducto2</label>
        <input type="file" name="foto2">
        <br>    
        <label for="">Descricpión Producto</label>
        <input type="text" name="DescripcionProducto" id="">
        <br>    
        <label for="">Stock Producto</label>
        <input type="number" name="StockProducto" id="">
        <br>

        <label for="">Autor</label>
        <select name="selectIdAutor">
            <?php  while ($row=mysqli_fetch_assoc($resultadoAutor)) { ?>
                <option value="<?php echo $row["IdAutor"]; ?>"> <?php echo $row["NombreAutor"];?> </option>
            <?php }?>
        </select>
        <br>

        <label for="">Categoría</label>
        <select name="selectIdCateg">
        <?php  while ($row=mysqli_fetch_assoc($resultadoCategoria)) { ?>
                <option value="<?php echo $row["IdCateg"]; ?>"> <?php echo $row["NombreCateg"];?> </option>
        <?php }?>
        </select>
        <br>

        <label for="">Genero</label>
        <select name="selectIdGenero">
        <?php  while ($row=mysqli_fetch_assoc($resultadoGenero)) { ?>
                <option value="<?php echo $row["IdGenero"]; ?>"> <?php echo $row["NombreGenero"];?> </option>
        <?php }?>
        </select>
        <br><br>
        <input type="submit" value="Submit" name="AgregarProducto">
    </form>
</body>
</html>