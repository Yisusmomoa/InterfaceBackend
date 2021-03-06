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

  <link rel="stylesheet" href="../css/index.css"  type="text/css" media="screen">
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
  <link rel="stylesheet" href="../css/index.css"  type="text/css" media="screen">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/introjs.min.css" 
  integrity="sha512-631ugrjzlQYCOP9P8BOLEMFspr5ooQwY3rgt8SMUa+QqtVMbY/tniEUOcABHDGjK50VExB4CNc61g5oopGqCEw==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"/>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


  <title>Pagina Principal</title>
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
        <li>
          <a href="javascript:void(0);" Submenu="no" onclick="javascript:introJs().setOptions({
                disableInteraction: true,
                showProgress: true,
                steps:[{
                  element: document.querySelector('.navbar'),
                  intro: 'Esta es la navbar donde estaran varias opciones',
                  position:'bottom'
                },{
                  element: document.querySelector('.row'),
                  intro: 'Productos m??s vendidos',
                  position: 'left'
                },
                {
                  element: document.querySelector('.container'),
                  intro: 'Algunas de nuestras categor??as',
                  position: 'bottom'
                },
                {
                  element: document.querySelector('.container2'),
                  intro: 'Prouctos gratis en tu primera compra',
                  position: 'right'
                },
                {
                  element: document.querySelector('.owl-carousel'),
                  intro: 'Un carrusel con nuestros productos ',
                  position: 'top'
                },
                {
                  element: document.querySelector('#QuienesSomos'),
                  intro: 'Alguna informaci??n de nosotros',
                  position: 'top'
            
                }]
              }).start();" >Tour</a>
        </li>
        <li><a Submenu="no" href="../html/Productos.php?pagina=1">productos</a></li>

        <?php if(!isset($_SESSION["s_usuario"])){ ?>
          <li><a Submenu="no" href="#" data-bs-toggle="modal" 
          data-bs-target="#exampleModal" id="btn-abrir-popup2">Iniciar sesi??n</a></li>
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
                  href="../bd/logout.php">Cerrar sesi??n</a>
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
 
  <article id="articleid">
 
  <div class="slider">
    <ul>
      <li><img src="../Media/Slider1.jpg" alt=""></li>
      <li><img src="../Media/Slider1.jpg" alt=""></li>
      <li><img src="../Media/Slider1.jpg" alt=""></li>
      <li><img src="../Media/Logotipo4.PNG" alt=""></li>
    </ul>
  </div>
  <br>
  <h1 id="tituloProductosDashboard">PRODUCTOS M??S VENDIDOS</h1>
  <br>
  <?php //var_dump($_SESSION['s_usuario']);
    //echo '<br>';
    //echo $_SESSION['s_usuario'][0]['IdUsuario'];
  ?>
  <?php
  // $con=mysqli_connect('localhost', 'root', '', 'discorder1');

  // $consouatptu="SELECT * FROM producto p
  // JOIN favorito fav ON p.IdProducto=fav.IdProductoFav
  // WHERE fav.IdUsuarioFav= 70 AND p.Oferta=1;";
  // $resultadotuipop=mysqli_query($con, $consouatptu);
  // $arrays = array();
  // $indice=0;
  // $emailBody="";
  // while ($row=mysqli_fetch_assoc($resultadotuipop)){ 
//     $emailBody.='<div class="card mb-3" style="max-width: 540px;">
//     <div class="row g-0">
//         <div class="col-md-4">
//             <img src="../Media/IsotipoB.PNG"
//              class="img-fluid rounded-start" >
//         </div>
//         <div class="col-md-8">
//             <div class="card-body">
//                 <h4 class="card-title">NOMBRE PRODUCTO</h4>
//                 <div class="precios">
//                     <h5 class="card-text">$5.56</h5>
//                     <h3 class="card-text">$3.56</h3>
//                 </div>
//                 <div class="BotonIrDiscord">
//                     <button>Ir a DiscOrder</button>
//                 </div>
//             </div>
//         </div>
//     </div>
// </div>';

    ?>
    
  <div class="row row-cols-1 row-cols-md-2 g-1 w-50 ">
      
   <?php 
    // }
    // print_r($emailBody);
  //var_dump($_SESSION['s_usuario'][1]);
  $consultaProdsMasVendidos="SELECT *,SUM(UnidadesVenta) AS TotalQuantity
 FROM producto p
 join detalleventa dv on p.IdProducto=dv.IdProductoDetalleVentaFK
 GROUP BY IdProducto
 ORDER BY TotalQuantity DESC LIMIT 4;";
   $con=mysqli_connect('localhost', 'root', '', 'discorder1');
   $resultado=mysqli_query($con, $consultaProdsMasVendidos);//ImgCateg          
   while($rowMasVendidos=mysqli_fetch_assoc($resultado)){
  ?>
 
    <a href="../html/Producto.php?IdProducto=<?php echo $rowMasVendidos["IdProducto"];?>">
      <div class="col ">
        <div class="card">
          <img src="\php\DiscOrder3\ImagenesServidor\<?php echo $rowMasVendidos['ImgProdMinRuta']; ?>" class="card-img-top" alt="...">
          <div class="card-body" prodsmasvendidos="si">
            <h2 class="card-title"><?php echo $rowMasVendidos['NombreProducto']?></h2>
          </div>
        </div>
      </div>
    </a>
   <?php }?>
  </div>
  <br><br>
  
    <div id="Categorias"> 

      <h1>CATEGOR??AS</h1>
     <br><br>
      <section class="container">
      <?php
       
        // include_once "../bd/conexion.php";
        // $objeto= new Conexion();
        //$conexion=$objeto->Conectar();
        $con=mysqli_connect('localhost', 'root', '', 'discorder1');
        $consulta="SELECT * FROM categoria ORDER BY RAND() LIMIT 4; ";
        $resultado=mysqli_query($con, $consulta);//ImgCateg

        while ($row=mysqli_fetch_assoc($resultado)) { 
      ?>
        <a href="../html/categorias.php?Categ=<?php echo $row['IdCateg'];?>&pagina=1">
          <div class="Card">
            <h5><?php echo $row["NombreCateg"]?></h5>
            <div class="Card-image">
              <img src="data:image/jpg;base64,<?php echo base64_encode($row['ImgCateg'])?>">
            </div>
          </div>
        </a>
      <?php
        }
      ?>

        

      </section>
    </div>
  <br><br><br>

  <div id="ProductosGratis">
    <h2>En tu primera compra te regalamos cualquiera de los siguientes productos</h2>
    <br><br>
    <section class="container2">
      <div class="Card2">
        <div class="Card2-image car-4">
          <img src="../Media/ProdRegalo1.png"  alt="">
        </div>
       
      </div>
      <div class="Card2">
        
        <div class="Card2-image car-5">
          <img src="../Media/ProdRegalo2.PNG" alt="">
        </div>
       
      </div>
      
    </section> 
  </div>
  <br><br><br>

  <h2>Algunos de nuestros productos</h2>
  <br><br>
  <div class="owl-carousel owl-theme">
      
      <?php
        $consulta="SELECT * from producto;";
        $resultado=mysqli_query($con, $consulta);//ImgCateg

        while ($row=mysqli_fetch_assoc($resultado)) { 
      ?>
        <div class="item">
          <div class="Card3">
            <div class="Card-image"><!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($row['ImgProdMin'])?>" > -->
              <img src="\php\DiscOrder3\ImagenesServidor\<?php echo $row['ImgProdMinRuta'];?>" alt="no aparece">
            </div>
            <h3><?php echo $row["NombreProducto"] ?></h3>
            <h4><?php echo $row["Precio"] ?>MXN</h4>
            <a href="../html/Producto.php?IdProducto=<?php echo $row["IdProducto"];?>">
              <button class="VerProducto" id="VerProductocarrusel">Ver producto</button>
            </a>
          </div>
        </div>
      <?php }?>
  </div>

  <br><br>
  <div id="QuienesSomos">
    <h1 class="titulosubpartes">EST??S EN DISC-ORDER</h1>
    <div id="infoquienessomos">
      <h4>Somos especialistas en distribuci??n discogr??fica. En nuestro Cat??logo encontrar??s, sobre todo, m??sica:
        ediciones especiales, limitadas, de coleccionista, as?? como las ??ltimas novedades del mercado discogr??fico, 
        que podr??s reservar incluso antes de que salgan a la venta. ??Intenta ponernos a prueba!</h4>
    </div>
    <!-- <button>M??s informaci??n</button> -->
   
    <br>
  </div>
  <br>
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
    <h4>Y recibe un cup??n de descuento</h4>
    <form action="" id="formRegistro" method="POST">
      <div class="contenedor-inputs">
        <input type="" name="Username" id="NombreUsuarioR" placeholder="NombreUsuario" required>
        <input type="email" name="Correo" id="CorreoR" placeholder="Correo electronico" required>
        <input type="password" name="Contrase??a" 
        id="Contrase??aR" placeholder="Contrase??a" required>
        <i class="far fa-eye" id="togglePasswordR"></i>
      </div>
      <input type="submit" class="btn-submit" name="Registro" value="Registrarse">
    </form>
  </div>
</div>

<div class="overlay" id="overlay2">
  <div class="popup" id="popup2">
    <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"> <i class="fas fa-times"></i> </a>
    <h3>Inicia Sesi??n</h3>
    <form id="formLogin" action="" method="POST">
      <div class="contenedor-inputs">
        
        <input type="" name="UsernameLogin" id="Usuario" placeholder="Nombre Usuario" required>
        <input type="password" name="Contrase??aLogin" id="Password"
         placeholder="Contrase??a"required /> 
         <i class="far fa-eye" id="togglePassword"></i>

       
        <!-- <input type="checkbox" name="remember" style="display block;"> <span>Recuerdame</span>-->
      </div>
      <input id="iniciasesionbtn" type="submit" class="btn-submit" name="LogIn" value="Iniciar Sesi??n">
    </form>
  </div>
  <div class="form-group" id="prcess">
      <div class="progress" style="display:none;">
          <div class="progress-bar progress-bar-striped active" 
            role="progressbar" aria-valuemin="0" aria-valuemax="100" 
            style="width: 100%">
            
          </div>
      </div>
  </div>
    
</div>

  <!-- Modal -->

   
    <br><br><br>
    

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
  
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/intro.min.js" 
  integrity="sha512-Q5ZL29wmQV0WWl3+QGBzOFSOwa4e8lOP/o2mYGg13sJR7u5RvnY4yq83W5+ssZ/VmzSBRVX8uGhDIpVSrLBQog==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>



  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
   integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" 
  integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  
</body>
</html>