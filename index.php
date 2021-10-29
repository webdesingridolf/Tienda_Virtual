<?php
require_once("config/config.php");
require_once("helpers/helpers.php");
$url=!empty($_GET['url'] )? $_GET['url'] :'home/home' ;
$urlArr=explode("/",$url);//lo convertimos en array
$controlador=$urlArr[0];//almacenas la primera ruta
$metodo=$urlArr[0];
$parametros="";

if(!empty($urlArr[1])) //en caso de existir 
{
    if($urlArr[1]!="")//en caso de no estar vacio
    {
        $metodo=$urlArr[1];
    }
}
if(!empty($urlArr[2]))
{
    if($urlArr[2]!="")
    {
        for($i=2;$i< count($urlArr);$i++)
        {
            $parametros.=$urlArr[$i].',';
        }
        $parametros=trim($parametros,',');
        echo $parametros;
    }

}
require_once("Libraries/core/autoload.php");
require_once("Libraries/core/load.php");
// load




?>