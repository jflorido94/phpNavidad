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
    <div class="col"></div>
    <!-- <div class="col"> -->
    <form class="col form-group"action="<?php echo constant('URL');?>sesion/iniciar" method="post">
      <h2>Iniciar Sesion</h2>
      <p><input type="text" name="usuario" id="" placeholder="Usuario"></p>
      <p><input type="password" name="password" id="" placeholder="Contraseña"></p>
      <p><input class="btn btn-c1 rounded-pill shadow-sm px-3 text-titulo" type="submit" value="Entrar"></p>
    </form>
  <!-- </div> -->
    <div class="col"></div>
    </div>
  <? include 'includes/footer.php'; ?>
</body>
</html>