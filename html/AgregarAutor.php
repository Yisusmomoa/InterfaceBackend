<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Autor</title>
</head>
<body>
    <form method="POST" action="../bd/InsertAutor.php" enctype="multipart/form-data">
        <label for="">Nombre Autor</label>
        <input type="text" name="NombreAutor" id="NombreAutor">
        <br>
        <label for="">ImgAutor</label>
        <input type="file" name="foto" >
        <br>    
        <label for="">Descricpión Autor</label>
        <input type="text" name="DescrAutor" id="">
        <br><br>
        <input type="submit" value="Submit" name="AgregarAutor">
    </form>
</body>
</html>