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
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>E-Mail</th>
        <!-- <th>Contraseña</th> -->
        <th>Acciones</th>
      </tr>
      </thead>
      <tbody>
    <?php foreach ($this->solicitudes['datos'] as $row) { ?>
      <tr>
        <td><?php echo $row['usuario']?></td>
        <td><?php echo $row['Nombre']?></td>
        <td><?php echo $row['Apellidos']?></td>
        <td><?php echo $row['Email']?></td>
        <!-- <td><?php echo $row['Contraseña']?></td> -->
        <td>
        <div class="btn-group">
        <a class="btn btn-success btn-sm" href="<?php echo constant('URL')."profesores/acesol/".$row['usuario']?>">Aceptar</a>
        <a class="btn btn-danger btn-sm" href="<?php echo constant('URL')."profesores/delsol/".$row['usuario']?>">Eliminar</a>
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