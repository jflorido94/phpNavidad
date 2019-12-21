<?php
require_once 'controllers/errores.php';
  class app  
  {
    function __construct()
    {
      $url = isset($_GET['url']) ? $_GET['url'] : 'main';
      $url = rtrim($url,'/');
      $url = explode('/', $url);

      $rutacontrolador = 'controllers/' . $url[0] . '.php';
      if (file_exists($rutacontrolador)) { 
        require_once $rutacontrolador;
        $controlador= new $url[0];
        $controlador->cargarmodelo($url[0]);

        if (isset($url[1])) {
          $controlador->{$url[1]}();
        }
        $controlador->cargar();

      }else {
        $controlador= new errores();
        $controlador->cargar();
      }

    }
  }
  

?>