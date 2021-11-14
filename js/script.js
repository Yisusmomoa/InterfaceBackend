
  // window.addEventListener('DOMContentLoaded', () => {
  //   //console.log('DOM fully loaded and parsed');
  
  //   introJs().setOptions({
  //     disableInteraction: true,
  //     showProgress: true,
  //     steps:[{
  //       element: document.querySelector('.navbar'),
  //       intro: 'Esta es la navbar donde estaran varias opciones',
  //       position:'bottom'
  //     },{
  //       element: document.querySelector('.row'),
  //       intro: 'Productos más vendidos',
  //       position: 'left'
  //     },
  //     {
  //       element: document.querySelector('.container'),
  //       intro: 'Algunas de nuestras categorías',
  //       position: 'bottom'
  //     },
  //     {
  //       element: document.querySelector('.container2'),
  //       intro: 'Prouctos gratis en tu primera compra',
  //       position: 'right'
  //     },
  //     {
  //       element: document.querySelector('.owl-carousel'),
  //       intro: 'Un carrusel con nuestros productos ',
  //       position: 'top'
  //     },
  //     {
  //       element: document.querySelector('#QuienesSomos'),
  //       intro: 'Alguna información de nosotros',
  //       position: 'top'
  
  //     }]
  //   }).start();
  
  // });






const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
});

window.onscroll = function(){
  AddOrRemove()
};

var Nav = document.getElementById("EjNav");
var NavPosition = Nav.offsetTop;

function AddOrRemove(){
  if(window.pageYOffset >= NavPosition){
      Nav.classList.add("Paste");
  }
  else{
      Nav.classList.remove("Paste");
  }
}



//favoritos//favoritos//favoritos//favoritos
//favoritos//favoritos//favoritos//favoritos
//favoritos//favoritos//favoritos//favoritos





function agregarfavoritos(IdUsuarioFav, IdProductoFav){
  debugger;
  $.ajax({
    type:'POST',
    data:{'IdUsuarioFav': IdUsuarioFav, 'IdProductoFav': IdProductoFav},
    url: '../bd/AgregarFavoritos.php',
    datatype:'json',
    beforeSend:function(){},
    success:function(data){
      var output = JSON.parse(data);
      debugger;
      //alert(output.Mensaje);
      if(output["Mensaje"]=="Agregado"){
        debugger;
          Swal.fire({
            icon: 'success',
            title: 'Producto agregado a favoritos'
          }).then((result)=>{
            if(result.value){
              window.location.href="../html/Producto.php?IdProducto="+IdProductoFav;
            }
        });
      }
      else{
        debugger;
        Swal.fire({
          icon: 'success',
          title: 'Producto eliminado de tus favoritos'
        }).then((result)=>{
          if(result.value){
            window.location.href="../html/Producto.php?IdProducto="+IdProductoFav;
          }
      });

      }
      
    }
  });
}

//favoritos//favoritos//favoritos//favoritos
//favoritos//favoritos//favoritos//favoritos
//favoritos//favoritos//favoritos//favoritos

function cambiarcantidadprodcarrito(idpordcant, iduscant,cantidadprod ){
  debugger;
 // var cantidadprod= $( "#cantidadprod" ).val();
  $.ajax({
    type:'POST',
    data:{"cantidadprod":cantidadprod, "idpordcant":idpordcant, "iduscant": iduscant},
    url: '../ajax/ModificarCantidadCarrito.php',
    datatype:"json",
    beforeSend:function(){},
    success:function(data){
       
          window.location.href="../html/Carrito.php";
        
    }

  });
  // alert(cantidadprod);
  // alert(idpordcant);
  // alert(iduscant);
}

function Decrementarcantidadprodcarrito(idpordcant, iduscant,cantidadprod ){
  debugger;
 // var cantidadprod= $( "#cantidadprod" ).val();
  $.ajax({
    type:'POST',
    data:{"cantidadprod":cantidadprod, "idpordcant":idpordcant, "iduscant": iduscant},
    url: '../ajax/DecrementarCantidadCarrito.php',
    datatype:"json",
    beforeSend:function(){},
    success:function(data){
       
          window.location.href="../html/Carrito.php";
        
    }

  });
  // alert(cantidadprod);
  // alert(idpordcant);
  // alert(iduscant);
}

function EliminarProducto(codigo,iduseliminar){
  debugger;
  $.ajax({
    data:{"idprodcarrito":codigo, "iduseliminar":iduseliminar},
    url: '../ajax/EliminarProductoCarrito.php',
    type:'POST',
    beforeSend:function(){},
    success:function(){
      debugger;
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      ).then((result)=>{
        
        if(result.value){
          window.location.href="../html/Carrito.php";
        }
    });
    }
  });

}
function listarprodscarrito(iduscarritolistar){
  table=$('#tablacarrito').DataTable({
    ajax:"../bd/listarprodscarrito.php"
  })

}

function AlertarEliminacion(codigo,iduseliminar){
  debugger;
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      EliminarProducto(codigo,iduseliminar)
    }
  })
}

function EfectuarCompra(IdUs, TotalVenta){
  // alert(IdUs);
  // alert(TotalVenta);
  $.ajax({
    type:'POST',
    data:{'idUs': IdUs, 'TotalVenta': TotalVenta},
    url: '../bd/EfectuarCompra.php',
    datatype:'json',
    beforeSend:function(){
    },
    success:function(data){
        debugger;
          Swal.fire({
            icon: 'success',
            title: 'Compra realizada con exito'
          }).then((result)=>{
            if(result.value){
             window.location.href="../html/index.php";
            }
        }); 
    }
  });
}

// //Carrito5
$("#agregacarrito").submit(function(e){
  e.preventDefault();
  var idprod=$('#idprodtu').val();
  var idUs=$('#IdUsuarioCarr').val();
  //var nombreprod=$('#nombreprod').val();
  var Cantidad=$('#Cantidad').val();
  debugger;
    $.ajax({
      url:"../ajax/agregarCarrito5.php", //a donde se manda
      type:"POST", //metodo de envío de datos
      datatype:"json",
      data:{idprod:idprod, idUs:idUs,Cantidad:Cantidad },
      success:function(data){
      //alert(data);
        //let posicion = data.indexOf("null");
      //alert(posicion);
       debugger;
        if(data=="agregado"){ //si pone un usuario que no existe
          Swal.fire({
            icon:'error',
            type:'error',
            title:'Usuario y/o password incorrecto',
          });
        }
        else{
          $("#badgeProducto").text(data);
          Swal.fire({
            icon:'success',
            type:'success',
            title:'Producto agregado con exito a tu carrito',
            confirmButtonColor:'#3885d6',
            confirmButtonText:'Aceptar'
          })
          
          
        }
      }
    });
  //$("#badgeProducto").text(Cantidad);
});

$("#AgregarCarritoIndividual").submit(function(e){
  e.preventDefault();
  var idprod=$('#idprodtu').val();
  //var nombreprod=$('#nombreprod').val();
  debugger;
    $.ajax({
      url:"../ajax/AñadirCarritoIndividual.php", //a donde se manda
      type:"POST", //metodo de envío de datos
      datatype:"json",
      data:{idprod:idprod},
      success:function(data){
      //alert(data);
        //let posicion = data.indexOf("null");
      //alert(posicion);
       debugger;
        if(data=="agregado"){ //si pone un usuario que no existe
          Swal.fire({
            icon:'error',
            type:'error',
            title:'Error',
          });
        }
        else{
          $("#badgeProducto").text(data);
          Swal.fire({
            icon:'success',
            type:'success',
            title:'Producto agregado con exito a tu carrito',
            confirmButtonColor:'#3885d6',
            confirmButtonText:'Aceptar'
          })
          
          
        }
      }
    });
  //$("#badgeProducto").text(Cantidad);
});


// //Carrito4
// $("#agregacarrito").submit(function(e){
//   e.preventDefault();
//   var idprod=$('#idprodtu').val();
//   //var idUs=$('#IdUsuarioCarr').val();
//   var nombreprod=$('#nombreprod').val();
//   var Cantidad=$('#Cantidad').val();
//   debugger;
//   $.ajax({
//     url:"../ajax/agregarCarrito4.php",
//     type:"POST",
//     datatype:"json",
//     data:{idprod:idprod, nombreprod:nombreprod, 
//     Cantidad:Cantidad}
//   }).done (function (data){
//     if(data==1){
//       //alert("tuptm");
//       Swal.fire({
//         icon:'success',
//         type:'success',
//         title:'Producto agregado al carrito',
//         confirmButtonColor:'#3885d6',
//         confirmButtonText:'Ingresar'
//       });
//       // //let posicion = response.indexOf("null");
//       //var cantidadproductos=Object.keys(data).length;
//        $("#badgeProducto").text(numobj);
//     }
//     else{
//       Swal.fire({
//         icon:'error',
//         type:'error',
//         title:'Error',
//       });
//     }
//   });
//   //$("#badgeProducto").text(Cantidad);
// });



$('#formLogin').submit(function(e){
  e.preventDefault();
  var usuario=$.trim($('#Usuario').val());
  var password=$.trim($('#Password').val());
 
  if(usuario.length=="" || password.length==""){
    Swal.fire({
      icon:'warning',
      type:'warning',
      title:'Debe ingresar un usuario y/o password',
    });
    return false;
  }
  else{
    debugger;
    $.ajax({
      url:"../bd/login.php", //a donde se manda
      type:"POST", //metodo de envío de datos
      datatype:"json",
      data:{usuario:usuario, password:password},
      
      success:function(data){
        
        
      // alert(data);
        let posicion = data.indexOf("null");
     //   alert(posicion);
       debugger;
        if(posicion!==-1){ //si pone un usuario que no existe
          Swal.fire({
            icon:'error',
            type:'error',
            title:'Usuario y/o password incorrecto',
          });
        }
        else{
          Swal.fire({
            icon:'success',
            type:'success',
            title:'Bienvenido a Disc-Order',
            confirmButtonColor:'#3885d6',
            confirmButtonText:'Ingresar'
          }).then((result)=>{
                    if(result.value){
                      window.location.href="../html/index.php";
                    }
                });
        }
      }
    });
  }
});

$('#formRegistro').submit(function(e){
  e.preventDefault();
  var usuario=$.trim($('#NombreUsuarioR').val());
  var password=$.trim($('#ContraseñaR').val());
  var email=$.trim($('#CorreoR').val());
  if(usuario.length=="" || password.length=="" || email.length==""){
    Swal.fire({
      icon:'warning',
      type:'warning',
      title:'Debe llenar todos los campos',
    });
    return false;
  }
  else{
    debugger;
    $.ajax({
      url:"../bd/registro.php", //a donde se manda
      type:"POST", //metodo de envío de datos
      datatype:"json",
      data:{usuario:usuario, password:password,email:email },
      success:function(data){
      //alert(data);
        let posicion = data.indexOf("null");
      //alert(posicion);
       debugger;
        if(posicion!==-1){ //si pone un usuario que no existe
          Swal.fire({
            icon:'error',
            type:'error',
            title:'Usuario y/o password incorrecto',
          });
        }
        else{
          Swal.fire({
            icon:'success',
            type:'success',
            title:'Registrado con exito, revise su correo electronico',
            confirmButtonColor:'#3885d6',
            confirmButtonText:'Ingresar'
          }).then((result)=>{
                    if(result.value){
                      window.location.href="../html/index.php";
                    }
                });
        }
      }
    });
  }
});



$(document).ready(function(){

 

 

  //favoritos//favoritos//favoritos//favoritos//favoritos//favoritos


  $('#searchfavs').on('keyup',function(){
  
    var search=$('#searchfavs').val();
    var idus=$("#idusfavs").val();
    debugger;
    //alert(search);
    $.ajax({
      type: 'POST',
      url:'../ajax/SearchFavs.php',
      data: {'search': search},
      success:function(resultado){
        debugger;
        $('#resultBusquedaFavs').html(resultado);
      }
    });
  });


  
  // $('#searchfavs').on('keyup',function(){
  
  //   var search=$('#searchfavs').val();
  //   var idus=$("#idusfavs").val();
  //   debugger;
  //   //alert(search);
  //   $.ajax({
  //     type: 'POST',
  //     url:'../ajax/SearchFavs.php',
  //     data: {'search': search},
  //     beforeSend:function(){

  //     }
  //   }). done(function(resultado){
  //     debugger;
  //     $('#resultBusquedaFavs').html(resultado);
  //   })
  // });



  //favoritos//favoritos//favoritos//favoritos//favoritos//favoritos




  var comboboxactivo=0;
  //links categorias iniciar sesión registrate
    $(".navbar-links li a[Submenu=no]").mouseenter(
      function(){
        $(this).animate( {fontSize:"1.1rem"},10);
        $(this).css({color: "white"},100);
        $(this).animate({opacity: '1.7'},'fast');
      });
      $(".navbar-links li a[Submenu=no]").mouseleave(
        function(){
            $(this).animate( {fontSize:"1rem"},10);
            $(this).css({color: "white"},100);
            $(this).animate({opacity: '0.7', },'fast');
      });
      //toggle animacion slide
      $(".toggle-button").click(function(){
          $(".navbar-links").slideToggle("slow");
      });

      //Botón pagar
      $(".proceed-btn").mouseenter(
        function(){
          $(this).css({color: "#252525"},100);
          $(this).css({background: "#fff"},100);
          $(this).css({border: "1px solid #252525"},100);
          $(this).css({transition: "0.5s"});
          $(this).animate( {fontSize:"20px"},100);
        });

        $(".proceed-btn").mouseleave(
          function(){
            $(this).css({color: "#fff"},100);
            $(this).css({background: "#252525"},100);
            $(this).css({transition: "0.5s"},100);
            $(this).animate( {fontSize:"15px"},100);
          });

        //Boton ver producto
        $(".VerProducto").mouseenter(function(){
        
          $(this).css({color: "#555555"},100);
          $(this).css({background: "#ffffff"},100);
          $(this).css({border: "1px solid #252525"},100);
          $(this).css({transition: "0.5s"});
        });

        $(".VerProducto").mouseleave(
          function(){
            $(this).css({color: "#ffffff"},100);
            $(this).css({background: "#555555"},100);
            $(this).css({transition: "0.5s"},100);
          });


      //Boton más información
      $("div#QuienesSomos button").mouseenter(
        function(){
          $(this).animate( {fontSize:"1.1rem"},100);
          
        });
        $("div#QuienesSomos button").mouseleave(
          function(){
              $(this).animate( {fontSize:"1rem"},100);
              
        });

        //img ojo cuando se pasa el curosr sobre la card
        $(".box").mouseenter(
          function(){
            console.log("si entro");
            $(this).find(".InfoProd").animate({'padding-top': '25px'},300);
            $(this).find(".InfoProd").animate({opacity: '1'},'fast');
            $(this).find("img").css("transform", "scale(1.1)"); //jala pero va sucede demasiado rapido
           
            /*
            $(this).find("img").animate({
              "width": 110,
              "height": 200,
              "left": 50,
              "top":  50 }, 1500 );
              */

            //$(this).find("img").css("transform", "scale(1.2)"); //jala pero va sucede demasiado rapido
            //$(this).animate({opacity: '0.5'},'fast'); 
          });

          //Arreglar aquí
        //o hacer que a imagen se escale un poco
          $(".box").mouseleave(
            function(){
             
              $(this).find(".InfoProd").animate({'padding-top': '0px'},300);
              $(this).find(".InfoProd").animate({opacity: '0.7'},'fast');
              
              $(this).find("img").css("transform", "scale(1)");
          });
         

          $(".InfoProd .btn").mouseenter(
            function(){
            
              $(this).css({color: "#ebfb47"},100);
              $(this).animate({background: '#444444'},"slow");
            });
            $(".InfoProd .btn").mouseleave(
              function(){
             
                  $(this).css({color: "#171717"},100);
                  $(this).animate({  background: '#EDEDED', },"slow");
            });

/*
//desplazamieto pagina usando el menu 
          //Evento click en combobox
          $('.toggle-button').click(function(){ 
          
            if(comboboxactivo===0){
              console.log('.l.');
              comboboxactivo=1;
              $("article").addClass("activearticulo");
             // $("#cardsProds").animate({top: "+=20px"},1000);
            }
            else{
              comboboxactivo=0;
              $("article").removeClass("activearticulo");
              //$("#cardsProds").animate({top: "-=1px"},1000);
            }
          });
          */

          //Evento click en combobox
          $('#comboboxordenarpor').click(function(){ 
          
            if(comboboxactivo===0){
              console.log('.l.');
              comboboxactivo=1;
              $(".containercardsprods").addClass("activee");
             // $("#cardsProds").animate({top: "+=20px"},1000);
            }
            else{
              comboboxactivo=0;
              $(".containercardsprods").removeClass("activee");
             // $("#cardsProds").animate({top: "-=1px"},1000);
            }
          });
          
        // $(window).scroll(function(){
        //   var scroll = $(window).scrollTop();
        //   if (scroll > 10) {
        //     $(".navbar").css("background" , "#2C2E36");
        //     $(this).trans
        //   }
        //   else{
        //     $(".navbar").css("background" , "rgb(109, 109, 109)	");  
        //   }
        //   console.log(scroll);
        // })




          //ordenar prods
            $("#comboboxordenarpor").change(function(){
              var selectedordenar = $(this).children("option:selected").val();
              var idcateg=$.trim($('#idcateg').val());
debugger;

             $.ajax({
                url: "../bd/PaginadorProds.php",
                type:"POST",
                datatype:"json",
                async:false,
                data:{selectedordenar: selectedordenar,
                  idcateg:idcateg,pagina:1 }
              }).done(function(listasords){
                debugger;
                document.getElementById("contenedorprodscateg").innerHTML=listasords;
              });
              

              // alert(selectedordenar);
              // alert(idcateg);
          });
            //ordenar prods



            
          //ordenar prods
          $("#comboboxordenarporProds").change(function(){
            var selectedordenar = $(this).children("option:selected").val();
           
debugger;

           $.ajax({
              url: "../bd/PaginadorProdsPantallaprods.php",
              type:"POST",
              datatype:"json",
              async:false,
              data:{selectedordenar: selectedordenar,pagina:1 }
            }).done(function(listasords){
              debugger;
              document.getElementById("contenedorprodscateg").innerHTML=listasords;
            });
            

            // alert(selectedordenar);
            // alert(idcateg);
        });
          //ordenar prods


        var carousel1=document.getElementsByClassName('Card3');
        $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          merge:true,
          mergeFit:true,
        //  nav:true, //se puede quitar
          items:4,
          stagePadding: Number,
          
          responsive:{
              600:{
                center:false,
                
                  items:1
              },
              900:{
                  items:2
              },
              1100:{
                items:3
              },
              1600:{
                items:4
              }
          }
        });

      $('#zoom_01').elevateZoom({
        cursor: "crosshair",  
        zoomWindowFadeIn: 500, 
        zoomWindowFadeOut: 750 
      }); 
          

     


/*
      //logo
      $(".brand-title a img").mouseenter(
        function(){
          $(this).animate( { height: '110px',
          width: '200px'});
        });

      $(".brand-title a img").mouseleave(
          function(){
            $(this).animate( { height: '90px',
            width: '150px'});
        });
        */
    });
    

    //como animar bien la imagen sin que se ueva todo alv 

   




//popup
var btnAbrirPopup=document.getElementById('btn-abrir-popup'),
    overlay=document.getElementById('overlay'),
    popup=document.getElementById('popup'),
    btncerrarpopup=document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});


btncerrarpopup.addEventListener('click',function(){
  overlay.classList.remove('active');
  popup.classList.remove('active');
});



//Iniciar sesión
//popup
var btnAbrirPopup2=document.getElementById('btn-abrir-popup2'),
    overlay2=document.getElementById('overlay2'),
    popup2=document.getElementById('popup2'),
    btncerrarpopup2=document.getElementById('btn-cerrar-popup2');

    btnAbrirPopup2.addEventListener('click', function(){
    overlay2.classList.add('active');
    popup2.classList.add('active');
});


  btncerrarpopup2.addEventListener('click',function(){
  overlay2.classList.remove('active');
  popup2.classList.remove('active');
});



const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#Password');

togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
});


const togglePasswordR = document.querySelector('#togglePasswordR');
const passwordR = document.querySelector('#ContraseñaR');

togglePasswordR.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = passwordR.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordR.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
});







//combobox productos

var comboboxordenarpor=document.getElementById('comboboxordenarpor');

comboboxordenarpor.addEventListener('click', function(){
  //comboboxordenarpor.classList.add('activee');
  console.log("tuptm");
});



//Aumentar cantidad carrito

function incrementValue()
{
    var value = parseInt(document.getElementById('1').value, 10);
    value = isNaN(value) ? 0 : value;//wtf .-.
   
    value++;
    document.getElementById('1').value = value;
}

function decrementValue()
{
    var value = parseInt(document.getElementById('1').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
      value--;
      document.getElementById('1').value = value;
    }
    
}














