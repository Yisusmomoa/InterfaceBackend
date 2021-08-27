

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


$(document).ready(function(){
  var comboboxactivo=0;
  //links categorias iniciar sesión registrate
    $(".navbar-links li a[Submenu=no]").mouseenter(
      function(){
        $(this).animate( {fontSize:"1.1rem"},10);
        $(this).animate({opacity: '0.5'},'fast');
      });
      $(".navbar-links li a[Submenu=no]").mouseleave(
        function(){
            $(this).animate( {fontSize:"1rem"},10);
            $(this).animate({opacity: '1', },'fast');
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
          $(this).animate( {fontSize:"1.1rem"},100);
        });

        $(".proceed-btn").mouseleave(
          function(){
            $(this).css({color: "#fff"},100);
            $(this).css({background: "#252525"},100);
            $(this).css({transition: "0.5s"},100);
            $(this).animate( {fontSize:"15px"},100);
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
            $(this).find("img").css("transform", "scale(1.2)"); //jala pero va sucede demasiado rapido
           
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
          
        $(window).scroll(function(){
          var scroll = $(window).scrollTop();
          if (scroll > 10) {
            $(".navbar").css("background" , "#2C2E36");
            $(this).trans
          }
          else{
            $(".navbar").css("background" , "rgb(109, 109, 109)	");  
          }
          console.log(scroll);
        })

        var carousel1=document.getElementsByClassName('Card3');
        $('.owl-carousel').owlCarousel({
          loop:true,
          margin:100,
          merge:true,
          mergeFit:true,
        //  nav:true, //se puede quitar
          items:4,
          stagePadding: Number,
          
          responsive:{
              600:{
                  items:2
                  
              },
              900:{
                  items:3
              },
              800:{
                  items:2
              },
              1000:{
                items:4
              },
              500:{
                items:1
                
                //modificar el padding o margin
              }
          }
        });

        $("#zoom_01").elevateZoom();
          



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
