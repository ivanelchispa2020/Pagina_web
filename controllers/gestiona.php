<?php include("models/conection.php"); ?>

<?php 






function getHabilidades(){


    $tra=new trabajo();
    $datos=$tra->getHabilidades();

    foreach($datos as $reg){	
    
      ?>

        
        <div class="reference-item" data-category="<?php echo $reg["FILTRO"] ; ?>">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/<?php echo $reg["IMAGEN"] ; ?>" class="img-responsive" alt=""/>

                                    <div class="overlay">
                                        <h3 class="reference-title">Más Información</h3> 
                                        <p>Presiona para conocer más...</p>
                                    </div>
                                </a>


                                <?php if($reg["ID_HABILIDAD"]==1 ) { ?>       
                                           <div class="sr-only reference-description" data-images="img/web_1.jpg,img/web_2.jpg,img/web_3.jpg,img/web_4.jpg">               
                                <?php } elseif($reg["ID_HABILIDAD"]==2) {?>
                                           <div class="sr-only reference-description" data-images="img/software_1.jpg,img/software_2.jpg,img/software_3.jpg">
                                <?php } elseif($reg["ID_HABILIDAD"]==3){ ?>
                                          <div class="sr-only reference-description" data-images="img/admin_1.jpg,img/admin_2.jpg,img/admin_3.jpg,img/admin_4.jpg">
                               <?php } else {?>
                                        <div class="sr-only reference-description" data-images="img/app_1.jpg,img/app_1.png,img/app_2.jpg,img/app_3.jpg">
                                    <?php } ?>


                                    <p><?php echo utf8_encode($reg["DESCRIPCION_HABILIDAD"]) ; ?></p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>













    <?php } 
 


}







?>