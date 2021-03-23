<?php
class EnlacesPaginas{

    public function enlacesPaginasModel($enLacesModeL){

        if($enlacesModel == "inicio" ||
        $enlacesModel == "nosotros" ||
        $enlacesModel == "servicios" ||
        $enlacesModel == "contactos"){
        
            $module = "views/modules/".$enlacesModel.".php";
        }
        return $module; 
    }
}
?>
