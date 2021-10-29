<?php
    $controlador=ucwords($controlador);
    $controllerFile="controllers/".$controlador.".php";//busca el archivo en la carpeta controller
    //validamos si existe el controlador
    if (file_exists($controllerFile)) {
        require_once($controllerFile);
        $controlador=new $controlador();
        if (method_exists($controlador,$metodo)) {
            $controlador->{$metodo}($parametros);
        }
        else{
            require_once("controllers/error.php");
        }
        
    }
    else
    {
        require_once("controllers/error.php");
    }
?>