


//popup
//registro
var btnAbrirPopup=document.getElementById('btn-abrir-popupRegistroRespo'),
    overlay=document.getElementById('overlay'),
    popup=document.getElementById('popup'),
    btncerrarpopup=document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
  debugger;
    overlay.classList.add('active');
    popup.classList.add('active');
});


btncerrarpopup.addEventListener('click',function(){
  overlay.classList.remove('active');
  popup.classList.remove('active');
});



//Iniciar sesión
//popup
var btnAbrirPopup2=document.getElementById('btn-abrir-popup2IniSesRespo'),
    overlay2=document.getElementById('overlay2'),
    popup2=document.getElementById('popup2'),
    btncerrarpopup2=document.getElementById('btn-cerrar-popup2');

btnAbrirPopup2.addEventListener('click', function(){
      debugger;
    overlay2.classList.add('active');
    popup2.classList.add('active');
});

btncerrarpopup2.addEventListener('click',function(){
  overlay2.classList.remove('active');
  popup2.classList.remove('active');
});
















  
// $(document).ready(function(){
// $("#botonagregarcarrito").click(function(e){
//   //  e.preventDefault();
//     var id=$(this).data('id');
//     var nombre=$(this).data('nombre');
//     //var web_path=$(this).data('web_path');
//     var Cantidad=$('#Cantidad').val();
//     debugger;
//     $.ajax({
//       url: "../ajax/agregarCarrito3.php",
//       type: "POST",
//       datatype: "json",
//       data: {id:id, nombre:nombre, 
//       Cantidad:Cantidad},//"web_path":web_path,
//       succes:function (response){
//         var cantidadproductos=Object.keys(response).length;
//         $("#badgeProducto").text(cantidadproductos);
//       }
//     });
//     //$("#badgeProducto").text(Cantidad);
//   });
// });

