<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include 'includes/head.php';
  ?>

</head>
<body>
  <?php 
    include 'includes/header.php';
    // var_dump($this->incidencias['datos'])
?>

<div class="container row">
  <div class="col-2"></div>
  <div class="col-8">
    <table class="table table-sm w-100 mt-5">
      <thead>
      <tr>
        <!-- <th>#</th> -->
        <th>Aula</th>
        <th>Fecha</th>
        <th>Profesor</th>
        <th>E-mail</th>
        <th>Acciones</th>
      </tr>
      </thead>
      <tbody>
    <?php foreach ($this->incidencias['datos'] as $row) { ?>
      <tr>
        <!-- <td><?php echo $row['Id']?></td> -->
        <td><?php echo $row['Aula']?></td>
        <td><?php echo $row['Fecha']?></td>
        <td><?php echo $row['Nombre']." ". $row['Apellidos']?></td>
        <td><?php echo $row['Email']?></td>
        <td>
        <div class="btn-group">
        <a class="btn btn-success btn-sm" href="<?php echo constant('URL')."incidencias/detinc/".$row['Id'] ?>">Detalles</a>
        <a class="btn btn-dark btn-sm" href="<?php echo constant('URL')."incidencias/meninc/".$row['Id'] ?>">Mensajes</a>
        <a class="btn btn-danger btn-sm" href="<?php echo constant('URL')."incidencias/delinc/".$row['Id'] ?>">Eliminar</a>
        </div>
        </td>
      </tr>
    <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="col-2"></div>
  </div>



  <? include 'includes/footer.php'; ?>
</body>
</html>