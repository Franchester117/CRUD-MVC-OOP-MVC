<?php    
    include_once("controller/controller".$controller.".php");
    $objController = "controller".ucfirst($controller);    
    $controller = new $objController(); 
    $controller->$action();
?>