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

    <h3>Incidencias</h3>

    <p><label>Aula: </label>
    <input type="text" name="aula" id="" required>

    <label>Profesor: </label>
    <input type="text" name="profesor" id="" required></p>

    <p><label>E-mail: </label>
    <input type="text" name="email" id="" required></p>

    <p><label>Detalles: </label></p>
    <textarea name="detalles" id=""></textarea>

  <? include 'includes/footer.php'; ?>
</body>
</html>