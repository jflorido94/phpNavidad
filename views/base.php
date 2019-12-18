<?php 

class vista
{
  
  function __construct()
  {
  }

  function render($nombre){
    require 'views/' . $nombre . '.php';
  }


}


?>