<?php

class incidencias extends controlador
{

  function __construct()
  {
    parent::__construct();
  }

  public function mostrar()
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
