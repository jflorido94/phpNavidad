<?php 

class sesionModelo extends modelo
{
  
  function __construct()
  {
    parent::__construct();
  }

  public function iniciar($usuario, $contraseña)
  {
    try {
      $resultado = [];
      $resultado["correcto"]=false;
      $resultado["datos"]=null;

      $sql = "SELECT * from profesores where Usuario=:usuario and Contraseña=:pass";
      $query = $this->db->connect()->prepare($sql);
      $query->execute([
        'usuario' => $usuario,
        'pass' => $contraseña
      ]);
      if ($query->rowCount()==1) {
        $resultado["correcto"] = true;
        $resultado["datos"] = $query->fetchAll(PDO::FETCH_ASSOC);
      }else {
        throw new PDOException("Usuario o contraseña incorrectos");
      }
      return $resultado;
    } catch (PDOException $ex) {
      $resultado["datos"] = $ex->getMessage();
      return $resultado;
    }
  }

}


?>