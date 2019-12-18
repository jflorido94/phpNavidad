<?php 

class sesion extends controlador
{
  
  function __construct()
  {
    parent::__construct();
    $this->vista->render('sesion');

  }


}


?>