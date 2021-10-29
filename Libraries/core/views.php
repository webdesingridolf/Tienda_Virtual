<?php
class views{
    public function getView($controller,$view,$data="")
    {
        //recibimos la clase desde el controlador y la validamos
        $controller=get_class($controller);
        if ($controller=="Home") {
            $view="Views/".$view.".php";//se arma la ruta para encontrar la vista

        }
        else{
            $view="Views/".$controller."/".$view.".php";

        }
        require_once($view);

    }
}
?>