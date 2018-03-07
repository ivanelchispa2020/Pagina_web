<?php 

 $error="";

    if(isset($_POST["nombre"])){

        if($_POST["nombre"] !="" && !is_numeric($_POST["nombre"])){
                $nombre=$_POST["nombre"];
     }
     }else{
       $error+="El Nombre no es valido...Revisalo.";
    }

    if(isset($_POST["apellido"])){

        if($_POST["nombre"] !="" && !is_numeric($_POST["apellido"])){
                $apellido=$_POST["apellido"];
     }
     }else{
       $error+="El Apellido no es valido...Revisalo.";
    }

    if(isset($_POST["email"])){

        if($_POST["email"] !="" && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $email=$_POST["email"];
     }
     }else{
       $error+="El Email no es valido...Revisalo.";
    }


  
  if(isset($_POST["telefono"])){

        if(strlen($_POST["telefono"]) >1 && is_numeric($_POST["telefono"])){
                $telefono=$_POST["telefono"];
     }
     }else{
       $error+="El telefono no es valido...Revisalo.";
    }
  
    if(isset($_POST["mensaje"])){

        if($_POST["mensaje"]!="" && !is_numeric($_POST["mensaje"])){
                $mensaje=$_POST["mensaje"];
     }
     }else{
       $error+="El Mensaje no es valido...Revisalo.";
    }
  

    if($error !=""){
        echo "no vacio";


    }else{


        echo "<h1>vacio</h1>";
    }




?>