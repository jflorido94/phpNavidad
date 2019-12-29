<?php 

class profesores extends controlador
{
  
  function __construct()
  {
    parent::__construct();

  }

  public function cargar(){
    // $this->vista->cargarvista('profesores');

  }
  public function solicitudes(){
    $solicitudes = $this->modelo->getsol();
    $this->vista->solicitudes=$solicitudes;
    $this->vista->cargarvista('solicitudes');
  }
  public function acesol(){
    $this->modelo->acesol();
    header('location: solicitudes');

  }
  public function delsol(){
    $this->modelo->delsol();
    header('location: solicitudes');

  }
  public function listado(){
    $profesores = $this->modelo->getprof();
    $this->vista->profesores=$profesores;
    $this->vista->cargarvista('profesores');
  }
  public function admprof(){
    $this->modelo->acesol();
    header('location: profesores');

  }
  public function delprof(){
    $this->modelo->delsol();
    header('location: profesores');

  }

   

}


?>