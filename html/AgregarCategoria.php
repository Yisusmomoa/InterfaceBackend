<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Autor</title>
</head>
<body>
    <form method="POST" action="../bd/InsertCategoria.php" enctype="multipart/form-data">
        <label for="">NombreCateg</label>
        <input type="text" name="NombreCateg" id="NombreAutor">
        <br>
        <label for="">Img Categoria</label>
        <input type="file" name="foto" >
        <br>    
        <label for="">DescricpiónCategoria</label>
        <input type="text" name="DescricpiónCategoria" id="">
        <br><br>
        <input type="submit" value="Submit" name="AgregarCategoria">
    </form>
</body>
</html>