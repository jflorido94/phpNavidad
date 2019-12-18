<?php 

class mensajes extends controlador
{
  
  function __construct()
  {
    parent::__construct();
    $this->vista->render('mensajes');

  }


}


?>