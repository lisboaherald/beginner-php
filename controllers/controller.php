<?php
/*LLAMADA A LA PANTALLA
----------------------------------------------------------------------------------*/
class MvcController{
    
    public function plantilla(){
        include "views/template.php"; 
    }
/*INTERACION DE USUARIO
----------------------------------------------------------------------------------*/
public function enlacesPaginasController(){

    $enlacesController = $_GET["action"];

    // echo $enlacesController;
    $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController); 
    include $respuesta;
  }
}
?>
