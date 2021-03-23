<?php

#El INDEX: En mostraremos la salida de las vistas al usurario y también atraves de él enviaremos las distintas acciones que el usurario enviara al controlador.

#require() Establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamento del programa. Por ello, si el archivo especifico en la función require() no se encuentra, saltará un error "PHP fatal error" y el programa PHP se detendrá. 

#La versión require_one() funciona de la misma forma que sus respectivos, salvo que, al utilizar la version _once, se impide la carga de un mismo archivo mas de una vez. 

#Si requirimos el mismo código más de una vez, corremos el riesgo de redeclaraciones de variables, funciones y clases


#objeto

require_once "controllers/controller.php";
require_once "models/model.php";    

$mvc = new MvcController();
$mvc -> plantilla();



?> 