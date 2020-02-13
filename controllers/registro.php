<?php 

class registro extends controlador
{
  function __construct()
  {
    if (UserSession::existCurrentUser()) {
      header("location: ". constant("URL"));
    }
    parent::__construct();
    $this->vista->mensaje =["",""];
  }

  public function mostrar(){
  $this->vista->cargarvista('registro');
  }

  public function iniciar(){
    
    if ($_POST["passconfirm"]==$_POST["password"]) {
    $nuevousuario = [
    'usuario'    => $_POST['usuario'],
    'nombre'     => $_POST['nombre'],
    'apellidos'  => $_POST['apellidos'],
    'email'      => $_POST['email'],
    'password'   => sha1($_POST['password'])];  
    if($this->modelo->insert($nuevousuario)){
      $mensaje=["Registro realizado correctamente, espere a que un administrador acepte la solicitud","success"];
    }else {
      $mensaje = ["Registro no realizado, nombre de usuario ya existente o contraseñas no coincidentes","danger"];
    }
  }else {
    $mensaje = ["Registro no realizado, contraseñas no coincidentes","danger"];
  }
    $this->vista->mensaje= $mensaje;

    $this->mostrar();

  }

}


?>