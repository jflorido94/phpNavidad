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
    // var_dump($this->detalles['datos'])
  ?>

<div class="container">
    <h3>Incidencias</h3>

    <label>Id: </label>
    <p><input type="text" name="id" id="" value=<?php echo $this->detalles['datos'][0]['Id']?> ></p>

    <label>Aula: </label>
    <p><input type="text" name="aula" id="" required value=<?php echo $this->detalles['datos'][0]['Aula']?>></p>

    <label>Fecha: </label>
    <p><input type="date" name="fecha" id="" required value=<?php echo $this->detalles['datos'][0]['Fecha']?>></p>

    <label>Profesor: </label>
    <p><input type="text" name="profesor" id="" required value="<?php echo $this->detalles['datos'][0]['Nombre']." ".
     $this->detalles['datos'][0]['Apellidos'];?>"></p>

    <label>E-mail: </label>
    <p><input type="text" name="email" id="" required value=<?php echo $this->detalles['datos'][0]['Email']?>></p>

    <label>Detalles: </label>
    <p><textarea name="detalles" id=""><?php echo $this->detalles['datos'][0]['Detalles']?></textarea>
  </div>
  <? include 'includes/footer.php'; ?>
</body>
</html>