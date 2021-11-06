<?php
  class Clientes extends controllers{
    public function __construct()
    {
        parent::__construct();
        session_start();
        if(empty($_SESSION['login']))
        {
            header('location:'.base_url().'login');
        }
        getPermisos(3);
    }
    public function clientes()
    {
        if (empty($_SESSION['permisosMod']['r'])) {
            header('location:'.base_url().'dashboard');
            # code...
        }
        $data['page_tag']="Clientes";
        $data['page_title']="Clientes <small> Tienda virtual</small>";
        $data['page_name']="clientes";
        $data['page_functions_js']="functions_clientes.js";

        $this->views->getView($this,"clientes",$data);//invocamos la vista 
        //echo"mensaje desde el controlador";
    }
    /*public function Mostrar(){
        $data=$this->model->MostrarProductos();
        print_r($data);
    }*/
    
}
?>