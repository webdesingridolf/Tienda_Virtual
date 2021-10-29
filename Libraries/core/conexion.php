<?php 

class Conexion{	  
   
    private $conect;

    public function __construct()
    {
        try{
            $this->conect = new PDO("mysql:host=".host."; dbname=".db_name,user,pasword);			
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            $this->conect='Error de conexion';
            echo"error: ".$e->getMessage();
        }
    }

    public  function Conectar() {     

        				        
       		return $this->conect;
       
    }
}
?>