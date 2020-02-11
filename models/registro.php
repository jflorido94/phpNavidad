<?php

class registroModelo extends modelo
{

  function __construct()
  {
    parent::__construct();
  }

  public function insert($nuevoregistro)
  {
    try {
      $sql = "INSERT into solicitud (usuario, nombre, apellidos, email, contraseña)
              VALUES(:usuario,:nombre, :apellidos, :email, :password)";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['usuario' =>$nuevoregistro['usuario'],
        'nombre'  => $nuevoregistro['nombre'],  'apellidos' => $nuevoregistro['apellidos'],
        'email'   => $nuevoregistro['email'],   'password'  => $nuevoregistro['password']
      ]);
      return true;
      
    } catch (PDOException $ex) {
      return false;
    }
  }
}
?>