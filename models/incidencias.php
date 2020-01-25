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
  public function detinc($param){
    try {
      $resultado = [];
      $resultado["correcto"]=false;
      $resultado["datos"]=null;



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

      

      return $resultado;
    } catch (PDOException $ex) {
      $resultado["correcto"]=false;
      $resultado["datos"] = $ex->getMessage();
      return $resultado;
    }
  }
  public function delinc($param){
    try {

      $sql = "DELETE FROM incidencias where usuario = :usuario";
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