<?php

/*LLAMADA A LA PANTALLA
----------------------------------------------------------------------------------*/
class MvcController{
    
    public function plantilla(){
        #incluide() Se utiliza en php para invocar el archivo que contiene código html.
        include "views/template.php"; 
    }


/*INTERACION DE USUARIO
----------------------------------------------------------------------------------*/
public function enlacesPaginasController(){

    $enlacesController = $_GET["action"];

    // echo $enlacesController;
    $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController); 
     # Los :: hace la coneccion entre los elaces.

    include $respuesta;
  }
 

}




?>