<?php
 class controllers{
     public function __construct()
     {
         $this->views=new views;
         $this->loadModel();
     }
     public function loadModel()
     {
         $model=get_class($this)."model";
         $routeclass="Models/".$model.".php";
         if (file_exists($routeclass)) {
             # code...
             require_once($routeclass);
             $this->model=new $model();
         }

     }
 }
?>