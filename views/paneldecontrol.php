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

  if (!isset($_SESSION['useract'])) {
    header('location: sesion');
  }else {
    if ($_SESSION['Admin']==1) {
      # code...
    } else {
      # code...
    }
    
  }


  ?>

  panel de control







</body>

</html>