<?php 

class registro extends controlador
{
  function __construct()
  {
    parent::__construct();
    $this->vista->mensaje ="";
  }

  public function cargar(){
  $this->vista->cargarvista('registro');
  }

  public function iniciar(){
    $nuevousuario = [
    'usuario'    => $_POST['usuario'],
    'nombre'     => $_POST['nombre'],
    'apellidos'  => $_POST['apellidos'],
    'email'      => $_POST['email'],
    'password'   => $_POST['password']];

    if($this->modelo->insert($nuevousuario)){
      $mensaje="Registro realizado bien";
    }else {
      $mensaje = "Registro no realizado";
    }
    $this->vista->mensaje= $mensaje;

  }

}


?>