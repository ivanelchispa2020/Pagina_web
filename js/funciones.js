$(function(){


 
    $("#enviar_mensaje").click(function(){

        var nombre=$("#form_nombre").val();
        var apellido=$("#form_apellido").val();
        var email=$("#form_email").val();
        var telefono =$("#form_telefono").val(); 
        var mensaje =$("#form_mensaje").val(); 


        if(nombre==""){
            $("#mensajes_error_email").fadeIn(2000).html("<h2>Debes ingresar un Nombre.</h2");
            $("#form_nombre").focus();
            return;
        }
        if(!isNaN(nombre)){
            $("#mensajes_error_email").fadeIn(2000).html("<h2>Un nombre no debe contener digitos.</h2");
            $("#form_nombre").val('');
            $("#form_nombre").focus();
            return;
        }
        if(apellido==""){
            $("#mensajes_error_email").fadeIn(2000).html("<h2>Debes ingresar un Apellido.</h2");
            $("#form_apellido").focus();
            return;
        }
        if(!isNaN(apellido)){
            $("#mensajes_error_email").fadeIn(2000).html("<h2>Un Apellido no debe contener digitos..</h2");
            $("#form_apellido").val('');
            $("#form_apellido").focus();
            return;
        }

        if(email==""){
            $("#mensajes_error_email").fadeIn(2000).html("<h2>Debes ingresar un Email.</h2");
            $("#form_email").focus();
            return;
        }
       

        if(validarEmail(email)==false){
            $("#mensajes_error_email").fadeIn(2000).html("<h2>Debes ingresar un Email valido.</h2");
            $("#form_email").val('');
            $("#form_email").focus();
            return;
        }
       
        if(telefono.length >1 && isNaN(telefono)){
            $("#mensajes_error_email").fadeIn(2000).html("<h2>Debes ingresar un Telefono valido.</h2");
            $("#form_telefono").focus();
            return;
        }

        if(mensaje==""){
            $("#mensajes_error_email").fadeIn(2000).html("<h2>Debes ingresar un Email.</h2");
            $("#form_mensaje").focus();
            return;
        }
       
        $("#mensajes_error_email").fadeIn(2000).html("<h2>Procesando peticion.</h2");
       
        from($('mi_formulario'),'respuesta','contact.php')


    });

   

})

function validarEmail(valor) {
	if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
			return true;
				} else {
				 return false;
				}
      }

