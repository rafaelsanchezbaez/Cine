<?php
require_once '../Model/config.php';
require_once '../Model/cinemodel.php';
$Nombre=$_POST['Nombre'];
$Sinopsis=$_POST['Sinopsis'];
$Horario=$_POST['Horario'];
$Clasificacion=$_POST['Clasificacion'];

$query='insert into cines (Nombre,Sinopsis,Horario,Clasificacion) values ("'.$Nombre.'","'.$Sinopsis.'","'.$Horario.'","'.$Clasificacion.'")';
$cinedb=cinemodel::Addpelicula($query);
if (cinedb) {
header('Location:Operation.php');
}
 ?>
