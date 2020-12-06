<?php include '../Layouts/head.php' ?>
<?php
require_once '../Model/config.php';
require_once '../Model/cinemodel.php';

$id=$_GET['Id'];
$query='select * from cines where Id='.$id.';';
$cine=cinemodel::Edditpelicula($query);
if (isset($cine)) {
  // code...
}
 ?>
<div class="row justify-content-center bg-danger">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header bg-dark">
        <h5 class="text-center text-white-50">Modificar Pelicula</h5>
      </div>
      <div class="card-body">
<form class="" action="Controller/Savepelicula.php" method="POST">
  <div class="form-group">
    <label class="col-sm-6 col-form-label" for="Nombre">Nombre</label>
    <div class="col-sm-12">
      <input type="text" name="Nombre" value="<?php echo $cine->Nombre ?>" class="form-control">
    </div>
    <div class="form-group">
      <label class="col-sm-6 col-form-label" for="Sinopsis">Sinopsis</label>
      <div class="col-sm-12">
        <input type="text" name="Sinopsis" value="<?php echo $cine->Sinopsis; ?>" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-sm-6 col-form-label" for="Horario">Horario</label>
        <div class="col-sm-12">
          <input type="text" name="Horario" value="<?php echo $cine->Horario; ?>" class="form-control">
        </div>
        <div class="form-group">
          <label class="col-sm-6 col-form-label" for="Clasificacion">Clasificacion</label>
          <div class="col-sm-12">
            <input type="text" name="Clasificacion" value="<?php echo $cine->Clasificacion; ?>" class="form-control">
          </div>
          <div class="form-group">
          <div class="row justify-content-center">
            <input type="submit" name="submit" value="Modificar " class="btn btn-danger btn-sm mt-4">

          </div>
            </div>
  </div>
</form>
      </div>
    </div>

  </div>

</div>

<?php include '../Layouts/footer.php' ?>
