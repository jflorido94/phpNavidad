<?php 

class errores extends controlador
{
  
  function __construct()
  {
    parent::__construct();
    $this->vista->render('errores');

  }


}


?>