$(function(){


    $("#form_nombre").focusout(function(){
        $("#form_apellido").focus();
    });

    $("#form_apellido").focusout(function(){
        $("#form_email").focus();
    });

    $("#form_email").focusout(function(){
        $("#form_telefono").focus();
    });


    $("#enviar_mensaje").click(function(){

        var nombre=$("#form_nombre").val();
        var apellido=$("#form_apellido").val();
        var email=$("#form_email").val();
        var telefono =$("#form_telefono").val(); 
        var mensaje =$("#form_mensaje").val(); 


        if(nombre==""){
            alert("error");
            $("#mensajes_error_email").fadeIn(2000).html("<h2>debes</h2>").fadeOut(2000);
         
        }


       

    });



})