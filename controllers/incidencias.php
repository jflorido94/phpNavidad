<?php

class incidencias extends controlador
{

  function __construct()
  {
    if (!UserSession::existCurrentUser()) {
      header("location: ". constant("URL"));
    }
    parent::__construct();
  }

  public function mostrar()
  {
    $incidencias = $this->modelo->getinc();
    $this->vista->incidencias = $incidencias;
    $this->vista->cargarvista('incidencias');
  }

  public function anadir(){
    $aulas=$this->modelo->getaulas();
    $this->vista->aulas=$aulas;
    $this->vista->cargarvista('addincidencia');
  }

  public function add(){
    $aula = $_POST['aula'];
    $detalles = $_POST['detalles'];
    $this->modelo->insert($aula,$detalles);
    header('location: mostrar');
  }

  public function detinc($param = null)
  {
    $aulas=$this->modelo->getaulas();
    $this->vista->aulas=$aulas;
    $detalles = $this->modelo->detinc($param);
    $this->vista->detalles = $detalles;
    $this->vista->cargarvista('detalles');
  }

  public function updinc($param){
    $detalles = [
      0=> $param[0],
      1=>$_POST['detalles'],
      2=>$_POST['aula']
    ];
    $this->modelo->upddetalle($detalles);
    header('location: '. constant('URL').'incidencias/mostrar');
  }

  public function addmen($param){
    $mensaje = [
      0=> $param[0],
      1=> $_POST['mensaje'],
      2=> UserSession::getCurrentUser()];
    $this->modelo->addmensaje($mensaje);
    header('location: '. constant('URL').'incidencias/meninc/'.$param[0]);
  }

  public function meninc($param = null){
    
    $mensajes = $this->modelo->meninc($param);
    $this->vista->mensajes=$mensajes;
    $this->vista->cargarvista('mensajes');
  }

  public function delinc($param = null)
  {
    $this->modelo->delinc($param);
    header('location: ../mostrar');
  }
}
