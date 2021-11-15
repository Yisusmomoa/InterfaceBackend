



var ventana = new Boolean(true);

//popup
//registro
var btnAbrirPopup=document.getElementById('btn-abrir-popupRegistroRespo'),
    overlay=document.getElementById('overlay'),
    popup=document.getElementById('popup'),
    btncerrarpopup=document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
    debugger;
    overlay.classList.toggle('active');
    popup.classList.toggle('active');
    overlay2.classList.toggle('active');
    popup2.classList.toggle('active');
});


btncerrarpopup.addEventListener('click',function(){
  debugger;
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
    overlay2.classList.toggle('active');
    popup2.classList.toggle('active');
    overlay.classList.toggle('active');
    popup.classList.toggle('active');
});

btncerrarpopup2.addEventListener('click',function(){
    overlay2.classList.remove('active');
    popup2.classList.remove('active');
});




$('#formLoginFromProducto').submit(function(e){
  e.preventDefault();
  var usuario=$.trim($('#Usuario').val());
  var password=$.trim($('#Password').val());
 var idprod=$.trim($('#idprodtu').val());
 debugger;
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
                      window.location.href="../html/Producto.php?IdProducto="+idprod;
                    }
                });
        }
      }
    });
  }
});







$('#formRegistroFromProducto').submit(function(e){
  e.preventDefault();
  var usuario=$.trim($('#NombreUsuarioR').val());
  var password=$.trim($('#ContraseñaR').val());
  var email=$.trim($('#CorreoR').val());
  var idprod=$.trim($('#idprodtu').val());
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
                      window.location.href="../html/Producto.php?IdProducto="+idprod;
                    }
                });
        }
      }
    });
  }
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

