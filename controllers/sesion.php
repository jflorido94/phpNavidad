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
    $contraseña = sha1($_POST['password']);
    
    $bdusuario = $this->modelo->iniciar($usuario,$contraseña);

    if ($bdusuario['correcto']) {
      $user = $bdusuario['datos']['0'];
      UserSession::setCurrentUser($user);
      
      header("location:" . constant('URL'));
    }else {
      echo "error";
      header("location:" . constant('URL'));
    }
  }

  function salir(){

    UserSession::sessionClose();
    header("location:" . constant('URL'));
  }

}


?>