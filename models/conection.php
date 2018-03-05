<?php


class conectar{
	
    public static function con(){

        $usuario="root";
        $contraseña="";

        try{
         $con= new PDO('mysql:host=localhost;dbname=paginapersonal', $usuario, $contraseña);
         $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         return $con;
        }catch(PDOException $e){
             echo "ERROR AL CONECTAR LA BASE DE DATOS ".$e->getMessage();
             exit();
            }
        
        }


}





class trabajo{

    private $habilidades=array();
 

    public function getHabilidades(){
			  
        $con=conectar::con();
        $sql="SELECT * FROM MIS_HABILIDADES";
        $res=$con->prepare($sql);
        $res->execute();
        
        foreach($res as $reg){
                $this->habilidades[]=$reg;			
            }   
         return $this->habilidades; 
   
   }

  







}






?>