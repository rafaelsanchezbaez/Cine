<?php include 'Layouts/head.php' ?>
<div class="row justify-content-center bg-danger">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header bg-dark">
        <h5 class="text-center text-white-50">Nueva pelicula</h5>
      </div>
      <div class="card-body">
<form class="" action="Controller/Savepelicula.php" method="POST">
  <div class="form-group">
    <label class="col-sm-6 col-form-label" for="Nombre">Nombre</label>
    <div class="col-sm-12">
      <input type="text" name="Nombre" value="" class="form-control">
    </div>
    <div class="form-group">
      <label class="col-sm-6 col-form-label" for="Sinopsis">Sinopsis</label>
      <div class="col-sm-12">
        <input type="text" name="Sinopsis" value="" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-sm-6 col-form-label" for="Horario">Horario</label>
        <div class="col-sm-12">
          <input type="text" name="Horario" value="" class="form-control">
        </div>
        <div class="form-group">
          <label class="col-sm-6 col-form-label" for="Clasificacion">Clasificacion</label>
          <div class="col-sm-12">
            <input type="text" name="Clasificacion" value="" class="form-control">
          </div>
          <div class="form-group">
          <div class="row justify-content-center">
            <input type="submit" name="submit" value="Enviar " class="btn btn-danger btn-sm mt-4">

          </div>
            </div>
  </div>
</form>
      </div>
    </div>

  </div>

</div>

<?php include 'Layouts/footer.php' ?>
