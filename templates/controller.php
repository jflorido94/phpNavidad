<?php 

class nombre extends controlador
{
  
  function __construct()
  {
    parent::__construct();
    $this->vista->render('nombre');

  }


}


?>