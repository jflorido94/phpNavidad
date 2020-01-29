<?php 

class profesoresModelo extends modelo
{
  
  function __construct()
  {
    parent::__construct();
  }
// -----------------SOLICITUDES ----------
  public function getsol(){
    try {
      $resultado = [];
      $resultado["correcto"]=false;
      $resultado["datos"]=null;

      $sql = "SELECT * FROM `solicitud`";
      $query = $this->db->connect()->prepare($sql);
      $query->execute();

      $resultado["datos"] = $query->fetchAll(PDO::FETCH_ASSOC);
      $resultado["correcto"]=true;
      return $resultado;
    } catch (PDOException $ex) {
      $resultado["correcto"]=false;
      $resultado["datos"] = $ex->getMessage();
      return $resultado;
    }
  }
  public function acesol($param){
    try {
      // $resultado = [];
      // $resultado["correcto"]=false;
      // $resultado["datos"]=null;

      //buscamos todos los campos de la solicitud
      $sql = "SELECT * FROM solicitud where usuario = :usuario";
      $query= $this->db->connect()->prepare($sql);
      $query->execute(['usuario'=>$param['0']]);
      $useracept = $query->fetchAll(PDO::FETCH_ASSOC)['0'];

      //insertamos en la tabla profesores con los datos antes guardados
      $sql = "INSERT INTO `profesores` (`Usuario`, `Nombre`, `Apellidos`, `Email`, `Contraseña`, `Admin`) 
              VALUES (:usuario, :nombre, :apellidos, :email, :pass, :admin)"; 
      $query = $this->db->connect()->prepare($sql);
      $query->execute([
        'usuario'   => $useracept['usuario'],     'nombre'  => $useracept['Nombre'], 
        'apellidos' => $useracept['Apellidos'],   'email'   => $useracept['Email'],
        'pass'      => $useracept['Contraseña'],  'admin'   => 0
      ]);

      //borramos la solicitud ya aceptada
      $this->delsol($param);


      return true;
    } catch (PDOException $ex) {
      // $resultado["correcto"]=false;
      // $resultado["datos"] = $ex->getMessage();
      // return $resultado;
      return $ex;
    }
  }
  public function delsol($param){
    try {

      $sql = "DELETE FROM solicitud where usuario = :usuario";
      $query= $this->db->connect()->prepare($sql);
      $query->execute(['usuario'=>$param['0']]);
      
      return true;
    } catch (PDOException $ex) {
      // $resultado["correcto"]=false;
      // $resultado["datos"] = $ex->getMessage();
      // return $resultado;
      return false;
    }
  }


  // -----------PROFESORES-------------
  public function getprof(){
    try {
      $resultado = [];
      $resultado["correcto"]=false;
      $resultado["datos"]=null;

      $sql = "SELECT * FROM `profesores`";
      $query = $this->db->connect()->prepare($sql);
      $query->execute();

      $resultado["datos"] = $query->fetchAll(PDO::FETCH_ASSOC);
      $resultado["correcto"]=true;
      return $resultado;
    } catch (PDOException $ex) {
      $resultado["correcto"]=false;
      $resultado["datos"] = $ex->getMessage();
      return $resultado;
    }
  }
  public function admprof($param){
    try {
      // $resultado = [];
      // $resultado["correcto"]=false;
      // $resultado["datos"]=null;

      //buscamos todos los campos del profesor
      $sql = "SELECT * FROM profesores where Usuario = :usuario";
      $query= $this->db->connect()->prepare($sql);
      $query->execute(['usuario'=>$param['0']]);
      $user = $query->fetchAll(PDO::FETCH_ASSOC)['0'];

      if ($user['Admin']==1) {
        $sql = "UPDATE profesores SET Admin = :admin WHERE Usuario = :usuario "; 
        $query = $this->db->connect()->prepare($sql);
        $query->execute([
          'usuario'   => $user['Usuario'], 
          'admin'   => 0] );
      } else {
        $sql = "UPDATE profesores SET Admin = :admin WHERE Usuario = :usuario "; 
        $query = $this->db->connect()->prepare($sql);
        $query->execute([
          'usuario'   => $user['Usuario'], 
          'admin'   => 1] );
      }

      return true;
    } catch (PDOException $ex) {
      // $resultado["correcto"]=false;
      // $resultado["datos"] = $ex->getMessage();
      // return $resultado;
      return $ex;
    }
  }

  public function delprof($param){
    try {

      $sql = "DELETE FROM profesores where usuario = :usuario";
      $query= $this->db->connect()->prepare($sql);
      $query->execute(['usuario'=>$param['0']]);
      
      return true;
    } catch (PDOException $ex) {
      // $resultado["correcto"]=false;
      // $resultado["datos"] = $ex->getMessage();
      // return $resultado;
      return false;
    }
  }

}

?>