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
      $query = $this->db->connect()->prepare('Insert into solicitud (nombre, apellidos, email, contraseña)
                                            VALUES(:nombre, :apellidos, :email, :password)');
      $query->execute([
        'nombre' => $nuevoregistro['nombre'], 'apellidos' => $nuevoregistro['apellidos'],
        'email' => $nuevoregistro['email'], 'password' => $nuevoregistro['password']
      ]);
      return true;
    } catch (PDOException $ex) {
      return $ex;
    }
  }
}
?>