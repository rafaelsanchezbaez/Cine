<?php include '../Layouts/head.php'; ?>
<?php
require_once '../Model/config.php';
require_once '../Model/cinemodel.php';

$cine=cinemodel::Listacine();

if (isset($cine)) {

}

 ?>
 <div class="row justify-content-center">
<div class="col-md-10 mt-4">
  <a href="../cine.php" class="btn btn-sm btn-outline-danger">Nuevo</a>
</div>
 </div>
 <div class="row justify-content-center">
   <div class="col-md-10 mt-4">
     <table class="table table-striped table-hover table-sm">
       <thead>
         <tr>
           <th>ID</th>
           <th>Nombre</th>
           <th>Sinopsis</th>
           <th>Horario</th>
           <th>Clasificacion</th>
           <th>Accion</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach ($cine as $c): ?>
         <tr>
           <td><?php echo $c['0']; ?></td>
           <td><?php echo $c['1']; ?></td>
           <td><?php echo $c['2']; ?></td>
           <td><?php echo $c['3']; ?></td>
           <td><?php echo $c['4']; ?></td>
           <td> <form class="" action="Updatecine.php" method="get">
             <input type="hidden" name="Id" value="<?php echo $c[0] ?>">
             <input type="submit" name="Enviar" value="Modificar" class="btn btn-outline-danger btn-sm">
            </form>
          </td>


         </tr>
         <?php endforeach; ?>
       </tbody>

     </table>
   </div>

 </div>

<?php include '../Layouts/footer.php'; ?>
