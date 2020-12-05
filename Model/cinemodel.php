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
  }


 ?>
