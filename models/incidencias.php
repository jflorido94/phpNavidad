<?php 

class incidenciasModelo extends modelo
{
  
  function __construct()
  {
    parent::__construct();
  }

  public function getinc(){
    try {
      $resultado = [];
      $resultado["correcto"]=false;
      $resultado["datos"]=null;

      $sql = "SELECT * FROM `incidencias`,`profesores` where `incidencias`.`Profesor`=`profesores`.`Usuario`";
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
  public function getaulas(){
    try {
      $resultado = [];
      $resultado["correcto"]=false;
      $resultado["datos"]=null;

      $sql = "SELECT * FROM aulas";
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

  public function insert($aula,$detalles){
    try {
      $sql = "INSERT INTO incidencias ( Aula, Fecha, Profesor, Detalles) 
            VALUES (:aula, current_time(), :profesor, :detalles)";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['aula' =>$aula,
        'profesor' => "prof",
        'detalles'   => $detalles
      ]);
      return true;
    } catch (PDOException $ex) {
      return $ex;
    }
  }

  public function detinc($param){
    try {
      $resultado = [];
      $resultado["correcto"]=false;
      $resultado["datos"]=null;

      $sql = "SELECT * FROM `incidencias`,`profesores` where incidencias.Profesor=profesores.Usuario AND incidencias.Id= :id";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['id'   => $param[0]] );

      $resultado["datos"] = $query->fetchAll(PDO::FETCH_ASSOC);
      $resultado["correcto"]=true;
      return $resultado;
    } catch (PDOException $ex) {
      $resultado["correcto"]=false;
      $resultado["datos"] = $ex->getMessage();
      return $resultado;
    }
  }
  public function meninc($param){
    try {
      $resultado = [];
      $resultado["correcto"]=false;
      $resultado["datos"]=null;
      $resultado["referencia"]=null;

      $sql = "SELECT * FROM `incidencias` WHERE incidencias.id= :id";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['id'   => $param[0]] );

      $resultado["referencia"] = $query->fetchAll(PDO::FETCH_ASSOC);

      $sql = "SELECT * FROM `mensajes`, `incidencias` WHERE mensajes.Incidente=incidencias.Id AND incidencias.id= :id";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['id'   => $param[0]] );

      $resultado["datos"] = $query->fetchAll(PDO::FETCH_ASSOC);
      $resultado["correcto"]=true;

      return $resultado;
    } catch (PDOException $ex) {
      $resultado["correcto"]=false;
      $resultado["datos"] = $ex->getMessage();
      return $resultado;
    }
  }
  public function delinc($param){
    try {

      $sql = "DELETE FROM incidencias where Id = :Id";
      $query= $this->db->connect()->prepare($sql);
      $query->execute(['Id'=>$param['0']]);
      
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