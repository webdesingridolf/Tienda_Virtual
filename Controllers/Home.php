<?php
class Home extends controllers{
    public function __construct()
    {
        parent::__construct();
    }
    public function home()
    {
        $data['tag_name']="Home";
        $data['page_title']="Pagina Principal";
        $data['page_name']="home";
        $this->views->getView($this,"home",$data);//invocamos la vista 
        //echo"mensaje desde el controlador";
    }
    /*public function Mostrar(){
        $data=$this->model->MostrarProductos();
        print_r($data);
    }*/
    
}
?>