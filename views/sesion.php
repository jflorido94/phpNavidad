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
  
    <form action="<?php echo constant('URL');?>sesion/iniciar" method="post">
      <h2>Iniciar Sesion</h2>
      <p><input type="text" name="usuario" id="" placeholder="Usuario"></p>
      <p><input type="password" name="password" id="" placeholder="Contraseña"></p>
      <p><input type="submit" value="Entrar"></p>
    </form>

  <? include 'includes/footer.php'; ?>
</body>
</html>