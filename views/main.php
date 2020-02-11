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
    if (!UserSession::existCurrentUser()) {
      header("location: ". constant('URL')."sesion");
    }elseif (UserSession::getCurrentUserAdmin()) {
      echo "Administrador";
    }else {
      echo "Hola Profesor del monton";
    }
  ?>


   <? include 'includes/footer.php'; ?>
</body>
</html>