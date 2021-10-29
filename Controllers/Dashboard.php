<?php
    class Dashboard extends controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function dashboard()
        {
            $data['page_id']=3;
            $data['page_name']="dashboard";
            $data['page_title']="Dashboard-Grupo Tecnologia SAM";
            $data['page_name']="Dashboard";
            $this->views->getView($this,"dashboard",$data);//invocamos la vista 
            //echo"mensaje desde el controlador";
        }
        /*public function Mostrar(){
            $data=$this->model->MostrarProductos();
            print_r($data);
        }*/
        
    }
?>