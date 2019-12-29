<?php

class incidencias extends controlador
{

  function __construct()
  {
    parent::__construct();
  }
  public function cargar()
  {
    // $this->vista->cargarvista('incidencias');
  }

  public function listado()
  {
    $incidencias = $this->modelo->getinc();
    $this->vista->incidencias = $incidencias;
    $this->vista->cargarvista('incidencias');
  }
  public function admprof()
  {
    $this->modelo->acesol();
    header('location: profesores');
  }
  public function delprof()
  {
    $this->modelo->delsol();
    header('location: profesores');
  }
}
