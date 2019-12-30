<?php 

class profesores extends controlador
{
  
  function __construct()
  {
    parent::__construct();

  }

  public function solicitudes(){
    $solicitudes = $this->modelo->getsol();
    $this->vista->solicitudes=$solicitudes;
    $this->vista->cargarvista('solicitudes');
  }
  public function acesol($param = null){
    var_dump($this->modelo->acesol($param));
    header('location: ../solicitudes');

  }
  public function delsol($param = null){
    $this->modelo->delsol($param);
    header('location: ../solicitudes');

  }
  public function mostrar(){
    $profesores = $this->modelo->getprof();
    $this->vista->profesores=$profesores;
    $this->vista->cargarvista('profesores');
  }
  public function admprof($param = null){
    $this->modelo->admprof($param);
    header('location: ../mostrar');
  }
  public function delprof($param = null){
    $this->modelo->delprof($param);
    header('location: ../mostrar');

  }

   

}


?>