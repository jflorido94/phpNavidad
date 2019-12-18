<?php 

class controlador
{
  protected $vista;
  protected $modelo;

  function __construct()
  {
    $this->vista = new vista();
  }

  function cargarmodelo($nombre)
  {
    $ruta = 'models/' . $nombre . '.php';

    if (file_exists($ruta)) {
      require $ruta;
      $this->modelo = new $nombre;
    }
  }


}


?>