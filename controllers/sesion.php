<?php 

class sesion extends controlador
{
  
  function __construct()
  {
    parent::__construct();

  }

  public function cargar(){
    $this->vista->cargarvista('sesion');
    }

  function iniciar(){

  }

  function salir(){
    
  }

}


?>