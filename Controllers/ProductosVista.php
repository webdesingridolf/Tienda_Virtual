<?php
    class ProductosVista extends controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function productos()
        {
            $data['tag_name']="productos";
            $data['page_title']="Pagina productos";
            $data['page_name']="productos";
            $this->views->getView($this,"productosVista");//invocamos la vista 
            //echo"mensaje desde el controlador";
        }
        /*public function Mostrar(){
            $data=$this->model->MostrarProductos();
            print_r($data);
        }*/
        
    }
?>