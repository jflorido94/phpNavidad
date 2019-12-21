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

    <?php echo $this->mensaje; ?>
  
    <form action="<?php echo constant('URL');?>registro/iniciar" method="post">
      <h2>Iniciar Sesion</h2>
      <p><input type="text" name="usuario" id="" placeholder="Usuario" required></p>
      <p><input type="text" name="nombre" id="" placeholder="Nombre" required></p>
      <p><input type="text" name="apellidos" id="" placeholder="Apellidos" required></p>
      <p><input type="email" name="email" id="" placeholder="e-Mail" required></p>
      <p><input type="password" name="password" id="" placeholder="Contraseña" required></p>
      <p><input type="password" name="passconfirm" id="" placeholder="Confirmar Contraseña" required></p>
      <p><input type="submit" value="Registrarse"></p>
    </form>

  <? include 'includes/footer.php'; ?>
</body>
</html>