<?php 

class inicio extends controlador
{
  
  function __construct()
  {
    parent::__construct();
    $this->vista->render('inicio');

  }


}


?>