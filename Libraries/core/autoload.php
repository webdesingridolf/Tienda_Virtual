<?php
    spl_autoload_register(function($class){//cargar todas las clases
        //en caso de existir el archivo en la carpeta lo requerimos 
        if (file_exists("Libraries/".'core/'.$class.".php")) {
        require_once("Libraries/".'core/'.$class.".php");
        }

    });
?>