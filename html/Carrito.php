<?php
  //include('../config.php');
 session_start();
  
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/Carrito.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <!--font awesome-->
<link rel="stylesheet" href="../css/all.min.css">
<!--carrousel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://use.fontawesome.com/879a7fe339.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/index.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

    <nav class="navbar" id ="EjNav">
        <div class="brand-title"><a href="../html/index.php"><img src="../Media/pixlr-bg-resultBN.png" alt=""width="150px" height="90px" id="imglogo"></a></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a Submenu="no" href="../html/categorias.php">productos</a></li>
            
            <?php if(!isset($_SESSION["s_usuario"])){ ?>
              <li><a Submenu="no" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn-abrir-popup2">Iniciar sesion</a></li>
            <?php }?>

            <?php if(!isset($_SESSION["s_usuario"])){ ?>
              <li><a Submenu="no" href="#" id="btn-abrir-popup">Registro</a></li>
            <?php }?>

            <?php if(!isset($_SESSION["s_usuario"])){ ?>
              <li><a Submenu="no" href="../html/Carrito.php">Carrito<i class="fas fa-shopping-cart"></i> 
              <span style="color: #F65F5F; font-size: 15px;" id="badgeProducto">1</span> </a></li>
            <?php }?>
              <li>
              <!--chinga tu puta madre pinche error de mierda .l.-->
              <?php if(isset($_SESSION["s_usuario"])){?>
                <div class="dropdown show" style="top: 10%;">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $_SESSION['s_usuario'][0]['Username']; ?>
                  </button>
                  <div class="dropdown-menu" style="background-color: black; width:100px;" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" style="color:white; font-size:10px;" href="#">Perfil</a>
                    <a class="dropdown-item"  style="color:white; font-size:10px;" href="../bd/logout.php">Cerrar sesión</a>
                  </div>
                </div>
              <?php } ?>
            </li>
            <!-- <li><button type="menu"  data-bs-toggle="modal" data-bs-target="#exampleModal">
              Launch demo modal
            </button></li> -->
            <li><input type="text" placeholder="Search.."> <input type="button" value="Buscar" id="btn-buscar"></li>
           
          </ul>
        </div>
</nav>



      <article id="articleid">

       
        <section class="mt-3">
          <div class="container" >
            <div class="cart">
              <div class="table-responsive">
                <table class="table table-light table-hover" id="tablacarrito">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-white">Producto</th>
                      <th scope="col" class="text-white">Precio</th>
                      <th scope="col" class="text-white">Cantidad</th>
                      <th scope="col" class="text-white">Total</th>
                      <th scope="col" class="text-white">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include_once "../bd/conexion.php";
                    $objeto= new Conexion();
                    $SubTotal=0;
                    $conexion=$objeto->Conectar();
                    $con=mysqli_connect('localhost', 'root', '', 'discorder1');
                    $idus=$_SESSION['s_usuario'][0]['IdUsuario'];
                     $consulta="SELECT * from carrito c 
                     JOIN producto p on p.IdProducto=c.IdProdCarritoFK
                     WHERE c.IdUsCarritoFK=$idus;";
                     $resultado=mysqli_query($con, $consulta);//ImgCateg
                   
                     while ($row=mysqli_fetch_assoc($resultado)) {
                      // echo "idprod: ".$row["IdProducto"];
                      // echo "<br>";
                      // echo "nombreprod: ".$row["NombreProducto"];
                      // echo "<br>";
                      // echo "cantidad: ".$row["Cantidad"];
                      // echo "<br>";
                      
                       $SubTotal+=$row["Precio"]*$row['Cantidad'] ;
                    ?>
                    <!--Aquí empieza la fila de la tabla-->
                    <tr>
                      <td>
                        <div class="main">
                          <div class="d-flex">
                            <img src="\php\DiscOrder3\ImagenesServidor\<?php echo $row['ImgProdMinRuta'];?>"
                             alt="" width="250" height="150">
                          </div>
                          <div class="des">
                            <h5><?php echo $row["NombreProducto"] ?></h5>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h4><?php echo $row["Precio"] ?>MXN</h4>
                      </td>
                      <td>
                        <div class="counter">
                          <i class="fas fa-angle-down" onclick="Decrementarcantidadprodcarrito('<?php echo $row['IdProducto'] ?>',
                          '<?php echo  $idus ?>', '<?php echo $row['Cantidad']  ?>');"></i>

                          <input class="input-number" id="cantidadprod"type="number" name="" value="<?php echo $row['Cantidad']; ?>" min="0" max="99" id="1">
                          
                          <i class="fas fa-angle-up"  onclick="cambiarcantidadprodcarrito('<?php echo $row['IdProducto'] ?>',
                          '<?php echo  $idus ?>', '<?php echo $row['Cantidad']  ?>');"></i>
                        </div>
                      </td>
                      <td>
                        <h3><?php echo $row["Precio"]*$row['Cantidad'] ?>MXN</h3>
                      </td>
                      
                      <td>
                        <a href="#" onclick="AlertarEliminacion('<?php echo $row['IdProducto'] ?>', '<?php echo $_SESSION['s_usuario'][0]['IdUsuario'];?>');"> 
                          <h1><i class="far fa-times-circle" style="color: #b13265; padding-right: 5px; padding-left: 5px;"></i></h1>
                        </a>
                      </td>
                    </tr>
                    <!--Aquí finaliza la fila de la tabla-->
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
<br><br>
        <div class="col-lg-4 offset-lg-4">
          <div class="checkout">
            <ul>
              <li class="subtotal">SubTotal <span>$<?php echo $SubTotal ?></span></li>
              <li class="cart-total"><h3>Super total</h3> <span>$<?php echo $SubTotal+=($SubTotal*0.16); ?></span></li>
            </ul>
            <a href="../html/checkout.php?IdUs=<?php echo $_SESSION['s_usuario'][0]['IdUsuario']; ?>&TotalVenta=<?php echo $SubTotal; ?> " class="proceed-btn">COMPRAR</a>
          </div>
        </div>
        
          <br><br>
          <footer class="RedesSociales">
            <h2>Redes sociales</h2>
            <a href=""><i class="fab fa-facebook-square"></i></a>
            <a href=""><i class="fab fa-instagram-square"></i></a>
            <a href=""><i class="fab fa-twitter-square"></i></a>

          </footer>

          <div class="overlay" id="overlay">
          <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"> <i class="fas fa-times"></i> </a>
            <h3>REGISTRATE</h3>
            <h4>Y recibe un cupón de descuento</h4>
            <form action="">
              <div class="contenedor-inputs">
                <input type="" name="" id="" placeholder="Nombre">
                <input type="email" name="" id="" placeholder="Correo">
                <input type="password" name="" id="" placeholder="Contraseña">
              </div>
              <input type="submit" class="btn-submit" value="Suscribirse">
            </form>
          </div>
        </div>
      </article>

      <!-- sweet alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
 
    
       <!--Slider-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  


  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
   integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" 
  integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  
</body>
</html>