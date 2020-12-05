<?php

$config = array(
  'host' =>  'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'Cinebd'
);

$db=new mysqli($config['host'],$config['username'],$config['password'],$config['database']);
if ($db->connect_errno)
  die("se ha producido un problema con la conexion a la base de datos")



 ?>
