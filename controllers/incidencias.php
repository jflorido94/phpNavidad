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
  public function detinc($param = null)
  {
    $this->modelo->detinc($param);
  }
  public function meninc($param = null){
    $this->modelo->meninc($param);
  }
  public function delinc($param = null)
  {
    $this->modelo->delinc($param);
    header('location: incidencias');
  }
}
