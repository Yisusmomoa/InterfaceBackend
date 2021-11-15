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
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">

    <link rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/Producto.css">
    <title>Producto</title>
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
       
        <li><a Submenu="no" href="../html/Productos.php?pagina=1">productos</a></li>

        <?php if(!isset($_SESSION["s_usuario"])){ ?>
          <li><a Submenu="no" href="#" data-bs-toggle="modal" 
          data-bs-target="#exampleModal" id="btn-abrir-popup2">Iniciar sesión</a></li>
        <?php }?>

        <?php if(!isset($_SESSION["s_usuario"])){ ?>
          <li><a Submenu="no" href="#" id="btn-abrir-popup">Registro</a></li>
        <?php }?>

        <?php if(isset($_SESSION["s_usuario"])){ ?>
          <li>
            <a Submenu="no" href="../html/Carrito.php"> Carrito <i class="fas fa-shopping-cart"></i> 
               <span style="opacity:1; font-size: 17px; margin-left: 5px;" id="badgeProducto">
                <?php 
                 include_once "../bd/conexion.php";
                 $objeto= new Conexion();
                 $conexion=$objeto->Conectar();
                 $idus=$_SESSION['s_usuario'][0]['IdUsuario'];
                 $consultacuentadeproductos= "SELECT * from carrito WHERE IdUsCarritoFK=$idus ";  
                 $resultado=$conexion->prepare($consultacuentadeproductos);
                 $resultado->execute();
                 $row_cnt = $resultado->rowCount();
                 echo $row_cnt;
                ?>
              </span> 
            </a>
          </li>
        <?php }?>
        <li>
          
          <?php if(isset($_SESSION["s_usuario"])){?>
              <div class="dropdown  " style="top: 10%;">
                <button class="btn btn-secondary dropdown-toggle" 
                type="button" id="dropdownMenuButton" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['s_usuario'][0]['Username']; ?>
                </button>
                <div class="dropdown-menu dropdown-menu-dark" style="width:100px;" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" style="color:white; opacity:1; font-size:11px;"
                   href="../html/Perfil.php">Favoritos</a>
                  <a class="dropdown-item" style="color:white; opacity:1; font-size:11px;" 
                  href="../html/Compras.php">Mis compras</a>
                  <a class="dropdown-item" style="color:white; opacity:1; font-size:11px;" 
                  href="../bd/logout.php">Cerrar sesión</a>
                </div>
              </div>
          <?php } ?>
        </li>
      

        <!-- <li><button type="menu"  data-bs-toggle="modal" data-bs-target="#exampleModal">
          Launch demo modal
        </button></li> -->
        <form method ="GET" action="../html/ProductosBusqueda.php">
          <li>
            <input type="text" id="busqueda" placeholder="Search.." value="" name="nombre">
            <input type="text" name="pagina" value="1" hidden>
            <input type="submit" value="Buscar" id="btn-buscar" >
          </li>
        </form>

      </ul>
    </div>
  </nav>


      <article>
        <br><br>
       <?php
        if(isset($_GET["IdProducto"])){
          $id=$_GET["IdProducto"];
          /*
          $objeto= new Conexion();
          $conexion=$objeto->Conectar();
          */
          $con=mysqli_connect('localhost', 'root', '', 'discorder1');
      
          $consulta="SELECT `IdProducto`, `NombreProducto`, `DescripcionProducto`, 
          `StockProducto`, `Destacado`, `IdAutorFK`, `IdCategFK`, `IdGeneroFK`, 
          `ImgProdMin`, `ImgProdMax`, `Precio`, `Descuento`, `Oferta`, `ImgProdMaxRuta`, 
          `ImgProdMinRuta`, c.NombreCateg, a.NombreAutor, g.NombreGenero from producto p 
          JOIN categoria c on c.IdCateg=p.IdCategFK 
          JOIN autor a on a.IdAutor= p.IdAutorFK 
          JOIN genero g on g.IdGenero=p.IdGeneroFK WHERE IdProducto= $id";
        
  
          $resultado=mysqli_query($con, $consulta);
          //$resultado=$conexion->prepare($consulta);
          //$resultado->execute();
          $data=mysqli_fetch_assoc($resultado);
          $idCategProd=$data["IdCategFK"];
          $idAutorProd=$data["IdAutorFK"];
          $IdGeneroProd=$data["IdGeneroFK"];
       ?>
      <h2>Detalles de <span><?php echo $data["NombreProducto"]; ?></span> </h2>
      <br>
          <div class="card mb-3 "  >
                    <div class="row g-7" >
                      <div class="col-md-8" > <!-- <div class="col-md-7"> -->
                         <img src="data:image/jpg;base64,<?php echo base64_encode($data['ImgProdMin'])?>" class="card-img-top" 
                          alt="..."  height="50px" > 
                          <!-- <img src="data:image/jpg;base64,<?php //echo //base64_encode($data['ImgProdMin'])?>" class="card-img-top" 
                          alt="..." id="zoom_01" height="50px" 
                          data-zoom-image="data:image/jpg;base64,<?php //echo base64_encode($data['ImgProdMax'])?>">  -->
                     
                      </div>
                      <div class="col-md-4" >
                          <div class="card-body" >
                          <form id="agregacarrito" action="" method="POST">
                            
                            <input type="text" hidden value="<?php echo $data["NombreProducto"]; ?>" id="nombreprod">
                            <input type="text" hidden value="<?php echo $data["IdProducto"]; ?>" id="idprodtu">
                            <h4 class="card-title"><?php echo $data["NombreAutor"]; ?></h4>
                            <h4 class="card-title"><?php echo $data["NombreGenero"]; ?> </h4>
                            <h4 class="card-title"><?php echo $data["NombreCateg"]; ?></h4>
                            <?php if($data["Descuento"]!=0){ 
                              $PrecioConDescuento=0;
                              $PrecioConDescuento=$data["Precio"]-($data["Precio"]*($data["Descuento"]/100));
                              ?>
                              <!-- <h4 class="card-title" style="background-color: red; width:35%; border-radius:2px;">DESCUENTO: -<?php echo $data["Descuento"]; ?>%</h4> -->
                              <h4 class="card-title alert alert-danger" style="width:55%; height:55px;" role="alert">DESCUENTO: -<?php echo $data["Descuento"]; ?>%</h4>
                              <!-- <h4 class="card-title alert alert-success     " style="width:55%; height:55px;" role="alert">DESCUENTO: -<?php echo $data["Descuento"]; ?>%</h4> -->
                              <h4 class="card-title" style="text-decoration:line-through; opacity:85%;">Precio Producto: <b> <?php echo $data["Precio"]; ?> MXN </b></h4>
                              <h3 class="card-title" style="font-size:39px;">Precio Producto: <b> <?php echo $PrecioConDescuento; ?> MXN </b></h3>
                            <?php } else{?>
                            <h3 class="card-title"  style="font-size:39px;">Precio Producto: <b> <?php echo $data["Precio"]; ?> MXN </b></h3>
                            <?php }?>
                            <h4 class="card-title">Descripción Producto: 
                              <b> <p class="card-text"><?php echo $data["DescripcionProducto"]; ?></p></b>
                            </h4>
                         
                              <label class="favorite-checkbox" title="Marcar como favorito">
                                <input type="checkbox"  name="favorite" id="favorite"
                                onclick="agregarfavoritos('<?php  echo $_SESSION['s_usuario'][0]['IdUsuario'] ?>'
                                ,'<?php echo $data['IdProducto'];?>');">
                                <span>
                                  
                                  <span class="material-icons unchecked">favorite_border</span>
                              
                                  <span class="material-icons checked">favorite</span>
                                </span>
                              </label>

                              <div id="CantidadProd">
                                <h3 class="card-text">Cantidad</h3>
                                <input type="number" name="CantidadCarritotuptm" id="Cantidad" 
                                placeholder="1" min="1" value="1">
                              </div>
                              <br>
                              <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-secondary" id="botonagregarcarrito" 
                                type="submit">
                                <i class="fas fa-shopping-cart"></i> Añadir carrito
                                </button>
                                <input type="text" id="IdUsuarioCarr" 
                                name="IdUsc" hidden 
                                value="<?php if(isset( $_SESSION['s_usuario'][0]['IdUsuario'])){
                                  echo $_SESSION['s_usuario'][0]['IdUsuario'];}
                                  else{echo "";}?>">
                              </div>
                          </form>
                          </div>
                       
                      </div>
                    </div>
          </div>
     
        <?php
         }
        ?>
        <br>
        <br>
        <h2>Productos Similares</h2>
        <br>
        
        <div class="owl-carousel owl-theme">
          <?php
            $consulta="SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero from producto p 
            JOIN categoria c on c.IdCateg=p.IdCategFK 
            JOIN autor a on a.IdAutor= p.IdAutorFK 
            JOIN genero g on g.IdGenero=p.IdGeneroFK 
            where IdAutorFK = $idAutorProd OR IdCategFK =$idCategProd OR IdGeneroFK = $IdGeneroProd
            ORDER BY RAND() LIMIT 6";
            $resultado=mysqli_query($con, $consulta);//ImgCateg
        
            while ($row=mysqli_fetch_assoc($resultado)) { 
          ?>
          <div class="item">
            <div class="Card3">
              <div class="Card-image"> 
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['ImgProdMin'])?>" >
              </div>
              <br>
              <h3><?php echo $row["NombreProducto"]; ?> </h3>
              <h5><?php echo $row["NombreGenero"]; ?></h5>
              <h4><?php echo $row["Precio"]; ?> MXN</h4>
              <a href="../html/Producto.php">
                <button class="VerProducto" id="VerProductocarrusel">Ver producto</button>
                <br>
              </a>
            </div>
          </div>
          <?php } ?>
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
      <form action="" id="formRegistroFromProducto" method="POST">
        <div class="contenedor-inputs">
          <input type="" name="Username" id="NombreUsuarioR" placeholder="NombreUsuario" required>
          <input type="email" name="Correo" id="CorreoR" placeholder="Correo electronico" required>
          <input type="password" name="Contraseña" 
          id="ContraseñaR" placeholder="Contraseña" required>
          <i class="far fa-eye" id="togglePasswordR"></i>
        </div>
        <input type="submit" class="btn-submit" name="Registro" value="Registrarse">
      </form>

      <a Submenu="no" href="#" data-bs-toggle="modal" 
          data-bs-target="#exampleModal" 
          id="btn-abrir-popup2IniSesRespo">Iniciar sesión</a>

    </div>
</div>

<div class="overlay" id="overlay2">
  <div class="popup" id="popup2">
    <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"> <i class="fas fa-times"></i> </a>
    <h3>Inicia Sesión</h3>
    <form id="formLoginFromProducto" action="" method="POST">
      <div class="contenedor-inputs">
        <input type="" name="UsernameLogin" id="Usuario" placeholder="Nombre Usuario" required>
        <input type="password" name="ContraseñaLogin" id="Password"
         placeholder="Contraseña" required /> 
         <i class="far fa-eye" id="togglePassword"></i>
        <!-- <input type="checkbox" name="remember" style="display block;"> <span>Recuerdame</span>-->
      </div>
      <input id="iniciasesionbtn" type="submit" class="btn-submit" 
            name="LogIn" value="Iniciar Sesión">
    </form>

    <a Submenu="no" href="#" id="btn-abrir-popupRegistroRespo">Registro</a>
    
  </div>
  <div class="progress" id="prcess" >
    <div class="progress-bar progress-bar-striped progress-bar-animated" 
      role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
    </div>
  </div>
</div>
      
      </article>


    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:5
              }
          }
        })
  </script>

  <!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
 
  <!--Slider-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="../js/jquery.elevateZoom-3.0.8.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/carrito.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
   integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" 
  integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>