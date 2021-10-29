<?php
class errors extends controllers{
    public function __construct()
    {
        parent::__construct();
    }
    public function NotFound()
    {
        $this->views->getView($this,"error");
        //echo"mensaje desde el controlador";
    }
   
}
$notfound=new errors();
$notfound->NotFound();
?>