<?php 

class sesion extends controlador
{

  function __construct()
  {
    if (UserSession::existCurrentUser()) {
      header("location: ". constant("URL"));
    }
    parent::__construct();

  }

  public function mostrar(){
    $this->vista->cargarvista('sesion');
    }

  function iniciar(){

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['password'];
    
    $bdusuario = $this->modelo->iniciar($usuario,$contraseña);

    if ($bdusuario['correcto']) {
      $user = $bdusuario['datos']['0'];
      UserSession::setCurrentUser($user);
      
      header("location:" . constant('URL'));
    }else {
      echo "error";
      $this->vista->errorsql=$bdusuario['datos'];
    }
  }

  function salir(){

    UserSession::sessionClose();
    header("location:" . constant('URL'));
  }

}


?>