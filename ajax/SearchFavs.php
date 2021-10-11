<?php

session_start();

$search=$_POST['search'];
$idusfavs=$_SESSION['s_usuario'][0]['IdUsuario'];

$con=mysqli_connect('localhost', 'root', '', 'discorder1');
 $consulta="SELECT * from producto p
 join favorito f on f.IdProductoFav=p.IdProducto
 WHERE p.NombreProducto LIKE '%$search%' AND $idusfavs=f.IdUsuarioFav";



// $search=$con->real_escape_string($_POST['search']);

$resultado=mysqli_query($con, $consulta);

$rutaimg="\\"."php"."\\"."DiscOrder3"."\\"."ImagenesServidor"."\\";
 while ($row=mysqli_fetch_assoc($resultado)){

    echo'<div class="box">'.
        '<a href=""><img src="'.$rutaimg.$row["ImgProdMinRuta"].'" alt=""> </a>'.
        '<div class="InfoProd">'.
          '<h5>'.$row["NombreProducto"].'</h5>'.
          '<h2>'.$row["Precio"].'</h2>'.
        '</div>
      </div>' ;

    
 }
// <div class="box">
    //     <a href=""><img src="../Media/IsotipoB.PNG" alt=""> </a>
    //     <div class="InfoProd">
    //       <h5>Nombre producto</h5>
    //       <h6>Marca</h6>
    //       <h2>Precio</h2>
    //     </div>
    //   </div>
?>