<?php 

class sesion extends controlador
{
  
  function __construct()
  {
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
      session_start();
      $usuario=$bdusuario['datos']['0'];
      $_SESSION['useract']=$usuario['Usuario'];
      $_SESSION['nombre']=$usuario['Nombre']." ".$usuario['Apellidos'];
      $_SESSION['admin']=$usuario['Admin'];
    }else {
      echo "error";
      $this->vista->errorsql=$bdusuario['datos'];
    }
  }

  function salir(){
    
  }

}


?>