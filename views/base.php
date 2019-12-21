<?php 

class vista
{
  
  function __construct()
  {
  }

  function cargarvista($nombre){
    require 'views/' . $nombre . '.php';
  }


}


?>