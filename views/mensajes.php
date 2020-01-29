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
  // var_dump($this->mensajes)
  ?>

  <div class="container row">
    <div class="col-2"></div>
    <div class="col-8">
      <div class=" row mt-5 d-flex justify-content-between">
        <div class="col-2 lead"> Aula: </br> <?php echo $this->mensajes['referencia'][0]['Aula'] ?></div>
        <div class="col-7 alert alert-dark d-flex justify-content-center">
          <?php echo $this->mensajes['referencia'][0]['Detalles'] ?>
        </div>
        <div class="col-2 lead"> Fecha: </br><?php echo $this->mensajes['referencia'][0]['Fecha'] ?></div>
        
        <?php for ($i = 0; $i < count($this->mensajes['datos']); $i++) {

          if ($i % 2 == 0) { //cambiar por mirar si el emisor es el logeado →
        ?>
            <div class="col-5">
            </div>
            <div class="col-7 alert alert-success d-flex justify-content-end">
              <?php echo $this->mensajes['datos'][$i]['Emisor'] . ": " . $this->mensajes['datos'][$i]['Mensaje'] ?>
            </div>
          <?php } else { ?>
            <div class="col-7 alert alert-primary ">
              <?php echo $this->mensajes['datos'][$i]['Emisor'] . ": " . $this->mensajes['datos'][$i]['Mensaje'] ?>
            </div>
            <div class="col-5">
            </div>
        <?php }
        } ?>
      </div>
    </div>
    <div class="col-2"></div>
  </div>


  <? include 'includes/footer.php'; ?>
</body>

</html>