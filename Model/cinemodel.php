<?php
/**
 *
 */
class cinemodel
  {
    public function Listacine()
    {
    global $db;
    $query="Select * from cines";
    $consulta=$db->query($query);
    $lineas=$consulta->fetch_all();

if (isset($lineas)) {
  return $lineas;
}else {
  return false;
}

    }
    public function Addpelicula($query){
      global $db;
      $consulta=$db->query($query);
      if ($consulta) {
      return true;
      }

    }
    public function Edditpelicula($query){
      global $db;
      $consulta=$db->query($query);
        $linea=$consulta->fetch_object();
      if (isset($linea)) {
        return $linea;

      }else {
      return false;
    }
    }
  }


 ?>
