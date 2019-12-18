<?php

class database
{
  private $host = constant('HOST');
  private $db = constant('DB');
  private $user = constant('USER');
  private $pass = constant('PASS');

  public function __construct()
  {
    
  }

  function connect()
  {
    try {
      $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return TRUE;
    } catch (PDOException $ex) {
      return $ex->getMessage();
    }
  }
}
?>