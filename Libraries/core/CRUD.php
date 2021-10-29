<?php
    class Crud extends Conexion{
        private $Conexion;
        private $strQuery;
        private $arrvalues;
        public function __construct()
        {
           $this->Conexion=new Conexion();//instanciamos el objeto 
		   $this->Conectar=$this->Conexion->Conectar();//ivocamos la funcion conectar
        }
        public function Mostrar($strQuery){
           $this->strQuery=$strQuery;
           
        $resultado = $this->Conectar->prepare($this->strQuery);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        }

        
    }
?>