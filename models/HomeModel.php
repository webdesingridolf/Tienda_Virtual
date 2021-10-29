<?php
class HomeModel extends Crud
{
    public function __construct()
    {
        //echo "mensaje desde el modelo home";
        parent::__construct();
    }
    /*public function MostrarProductos(){
        $query= "SELECT * FROM vw_productos ORDER BY id ASC;";
        $request_mostrar=$this->Mostrar($query);
        return $request_mostrar;

    }*/
   

}
?>