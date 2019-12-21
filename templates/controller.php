<?php 

class nombre extends controlador
{
  
  function __construct()
  {
    parent::__construct();

  }
  public function cargar(){
    $this->vista->cargarvista('nombre');
    }

}


?>