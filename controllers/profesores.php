<?php 

class profesores extends controlador
{
  
  function __construct()
  {
    parent::__construct();
    $this->vista->render('profesores');

  }


}


?>