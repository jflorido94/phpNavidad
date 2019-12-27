<?php 

class main extends controlador
{
  
  function __construct()
  {
    parent::__construct();
    
  }

  public function cargar(){
    $this->vista->cargarvista('main');
    }


}


?>