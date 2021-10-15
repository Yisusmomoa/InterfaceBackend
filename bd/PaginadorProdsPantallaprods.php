<?php 
          //  echo $Categ;
           $pagina=$_POST['pagina'];
           
           $con=mysqli_connect('localhost', 'root', '', 'discorder1');
           $Articulosporpagina=2;
           $selectedordenar=$_POST['selectedordenar'];
           
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
            $iniciar=($_POST['pagina']-1)* $Articulosporpagina;
            switch ($selectedordenar) {
                case 1://ordenar por precio(barato-caro)
                    $consultadeprodsparalapaginacion=
                    "SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero
                    from producto p 
                    JOIN categoria c on c.IdCateg=p.IdCategFK 
                    JOIN autor a on a.IdAutor= p.IdAutorFK 
                    JOIN genero g on g.IdGenero=p.IdGeneroFK ORDER BY Precio
                    LIMIT $iniciar,$Articulosporpagina;";
                break;
                case 2://ordenar por precio(caro-barato)
                    $consultadeprodsparalapaginacion=
                    "SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero
                    from producto p 
                    JOIN categoria c on c.IdCateg=p.IdCategFK 
                    JOIN autor a on a.IdAutor= p.IdAutorFK 
                    JOIN genero g on g.IdGenero=p.IdGeneroFK ORDER BY Precio desc
                    LIMIT $iniciar,$Articulosporpagina;";
                break;
                case 3://ordenar por nombre(a-z)
                    $consultadeprodsparalapaginacion=
                    "SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero
                    from producto p 
                    JOIN categoria c on c.IdCateg=p.IdCategFK 
                    JOIN autor a on a.IdAutor= p.IdAutorFK 
                    JOIN genero g on g.IdGenero=p.IdGeneroFK 
                    ORDER BY p.NombreProducto
                    LIMIT $iniciar,$Articulosporpagina;";
                break;
                case 4://ordenar por fecha más reciente
                    $consultadeprodsparalapaginacion=
                    "SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero
                    from producto p 
                    JOIN categoria c on c.IdCateg=p.IdCategFK 
                    JOIN autor a on a.IdAutor= p.IdAutorFK 
                    JOIN genero g on g.IdGenero=p.IdGeneroFK ORDER BY idProducto
                    LIMIT $iniciar,$Articulosporpagina;";
                break;
                case 5://ordenar por más vendidos
                    $consultadeprodsparalapaginacion=
                    "SELECT *, c.NombreCateg, a.NombreAutor, g.NombreGenero
                    from producto p 
                    JOIN categoria c on c.IdCateg=p.IdCategFK 
                    JOIN autor a on a.IdAutor= p.IdAutorFK 
                    JOIN genero g on g.IdGenero=p.IdGeneroFK  ORDER BY idProducto
                    LIMIT $iniciar,$Articulosporpagina;";
                break;
            }
           
            $resultadoprod=mysqli_query($con, $consultadeprodsparalapaginacion);
            while ($row=mysqli_fetch_assoc($resultadoprod)) { 
                
          
            echo '
            <div class="box">
            <a href='.'"../bd/showProducto.php?IdProducto='.$row["IdProducto"].'">'.
            '<img  src='. '"data:image/jpg;base64,'.base64_encode($row['ImgProdMin']).'" >'.
            '</a>'.
            '<div class="InfoProd">'.
            '<h5>'.$row["NombreProducto"].'</h5>'.
            '<h6>'. $row["NombreAutor"].'</h6>'.
            '<h2>'. $row["Precio"].'</h2>'.
            '<a href="" class="btn">Añadir carrito</a>
            </div>
            </div>';
            }
            ?>
            
         
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



        