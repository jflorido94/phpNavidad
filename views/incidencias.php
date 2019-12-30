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
?>

<div class="container row">
  <div class="col-2"></div>
  <div class="col-8">
    <table class="table table-sm w-100 mt-5">
      <thead>
      <tr>
        <th>#</th>
        <th>Aula</th>
        <th>Profesor</th>
        <!-- <th>Contraseña</th> -->
        <th>Acciones</th>
      </tr>
      </thead>
      <tbody>
    <?php foreach ($this->incidencias['datos'] as $row) { ?>
      <tr>
        <td><?php echo $row['Id']?></td>
        <td><?php echo $row['Aula']?></td>
        <td><?php echo $row['Nombre']." ". $row['Apellidos']?></td>
        <!-- <td><?php echo $row['Email']?></td> -->
        <!-- <td><?php echo $row['Contraseña']?></td> -->
        <td>
        <a class="btn btn-outline-info btn-sm" href="<?php echo constant('URL')."profesores/detinc/".$row['Id'] ?>">Detalles</a>
        <a class="btn btn-outline-warning btn-sm" href="<?php echo constant('URL')."profesores/detinc/".$row['Id'] ?>">Mensajes</a>
        <a class="btn btn-outline-danger btn-sm" href="<?php echo constant('URL')."profesores/delprof/".$row['Id'] ?>">Eliminar</a>
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