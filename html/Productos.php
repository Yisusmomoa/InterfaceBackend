<?php
  //include('../config.php');
 session_start();
  
 $pagina=$_GET['pagina'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/index.css">
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
  <link rel="stylesheet" href="../css/categoria.css">
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

        <?php if(isset($_SESSION["s_usuario"])){ ?>
          <li>
            <a Submenu="no" href="../html/Carrito.php">Carrito<i class="fas fa-shopping-cart"></i> 
             
              <span style="color: #F65F5F; font-size: 15px;" id="badgeProducto">
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
          <!--chinga tu puta madre pinche error de mierda .l.-->
          <?php if(isset($_SESSION["s_usuario"])){?>
            <div class="dropdown show" style="top: 10%;">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['s_usuario'][0]['Username']; ?>
              </button>
              <div class="dropdown-menu" style="background-color: black; width:100px;" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" style="color:white; font-size:10px;" href="#">Perfil</a>
                <a class="dropdown-item"  style="color:white; font-size:10px;" href="../bd/logout.php">Cerrar sesi??n</a>
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
      
    <article>
      
        <div id="CabeceraCategs">

          <br>
          <h1>CATEGORIAS</h1>
          <br>
            <div class="categs">
              <a href="../html/categorias.php"><h4>Cds</h4></a><!-- usar ajax para esta wea-->
              <a href="../html/categorias.php"><h4>Ropa</h4></a>
              <a href=""><h4>Vinilio</h4></a>
              <a href=""><h4>Blu-Ray Disc</h4></a>
              <div class="CabeceraOrdenarPor">
                <select id="comboboxordenarporProds" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Ordenar por</option>
                  <option value="1">Precio(Barato-Caro)</option>
                  <option value="2">Precio(Caro-Barato)</option>
                  <option value="3">Nombre(a-z)</option>
                  <option value="4">Fecha(M??s recientes)</option>
                  <option value="5">M??s Relevante</option>  <!--hacer un contador y que cada vez que se ingrese a un producto se sume -->
                </select>
              </div>
            </div>
            <br>
       
        </div>
        
        <br>
        <br>
        <br>
          <input type="text" id="idcateg" name="" id="" hidden  value="<?php echo $Categ ?>">
        <div id="contenedorprodscateg" class="containercardsprods">
          <?php 
          //  echo $Categ;
         
           $con=mysqli_connect('localhost', 'root', '', 'discorder1');
           $Articulosporpagina=2;
           
           $consulta= "SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero
           from producto p 
           JOIN categoria c on c.IdCateg=p.IdCategFK 
           JOIN autor a on a.IdAutor= p.IdAutorFK 
           JOIN genero g on g.IdGenero=p.IdGeneroFK ";
            $resultado=mysqli_query($con, $consulta);
            $totalarticulosdb=$resultado->num_rows;
            // echo '<h2>'. $totalarticulosdb.'</h2>';
            $paginas=$totalarticulosdb/$Articulosporpagina;
            $paginas=ceil($paginas);
            $iniciar=($_GET['pagina']-1)* $Articulosporpagina;

            $consultadeprodsparalapaginacion=
            "SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero
            from producto p 
            JOIN categoria c on c.IdCateg=p.IdCategFK 
            JOIN autor a on a.IdAutor= p.IdAutorFK 
            JOIN genero g on g.IdGenero=p.IdGeneroFK 
            ORDER BY idProducto
            LIMIT $iniciar,$Articulosporpagina;";
            $resultadoprod=mysqli_query($con, $consultadeprodsparalapaginacion);
            while ($row=mysqli_fetch_assoc($resultadoprod)) { 
          ?>
          <div class="box">
              <a href="../html/Producto.php?IdProducto=<?php echo $row["IdProducto"];?>">
              <img src="\php\DiscOrder3\ImagenesServidor\<?php echo $row['ImgProdMinRuta']; ?>">
         
              </a>
              <form id="AgregarCarritoIndividual" action="" method="post">
                <div class="InfoProd">
                  <input type="text" hidden 
                  value="<?php echo $row["IdProducto"]; ?>" 
                  id="idprodtu">
                  <h5><?php echo $row["NombreProducto"]; ?></h5>
                  <h6><?php echo $row["NombreAutor"]; ?></h6>
                  <h2><?php echo $row["Precio"]; ?></h2>
                  <button class="btn btn-light" id="botonagregarcarritoIndividual" type="submit">
                      <i class="fas fa-shopping-cart"></i> A??adir carrito
                  </button>
                  <!-- <a href="" class="btn">A??adir carrito</a> -->
                </div>
              </form>
          </div>
          
            <?php }?>
            
         
            <ul class="pagination position-relative position-absolute top-100 start-50 translate-middle">
              <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled':'' ?>">
                
                <a class="page-link" href="../html/Productos.php?pagina=<?php echo $_GET['pagina']-1?>" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
             <?php for($i=0; $i<$paginas; $i++){?>
              <li class="page-item  <?php echo $_GET['pagina']==$i+1 ?'active':''  ?>">
              
                <a class="page-link" href="../html/Productos.php?pagina=<?php echo $i+1?>"> 
                 <?php echo $i+1 ?>
                </a>
              </li>
            <?php }?>
              <li class="page-item <?php echo $_GET['pagina']>=$paginas? 'disabled':'' ?>">
             
                <a class="page-link" href="../html/Productos.php?pagina=<?php echo $_GET['pagina']+1?>">Next</a>
              </li>
           </ul> 


        </div>

        <footer class="RedesSociales">
    <h2>Redes sociales</h2>
    <a href=""><i class="fab fa-facebook-square"></i></a>
    <a href=""><i class="fab fa-instagram-square"></i></a>
    <a href=""><i class="fab fa-twitter-square"></i></a>

  </footer>
    
    
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
  


  <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
   integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" 
  integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>


</body>
</html>