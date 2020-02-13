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
    <h3>Incidencias</h3></br>

    <form action="<?php echo constant('URL')."incidencias/updinc/".$this->detalles['datos'][0]['Id'] ?>" method="post">
    <p><label>Fecha: <?php echo $this->detalles['datos'][0]['Fecha']?></label></p>
    
    <p><label>Profesor: <?php echo $this->detalles['datos'][0]['Nombre']." ".$this->detalles['datos'][0]['Apellidos'];?></label></p>
    
    <p><label>E-mail: <?php echo $this->detalles['datos'][0]['Email']?></label></p>
    
    <p> <select name="aula">
                        <option selected>--Aula--</option>
                        <?php foreach ($this->aulas['datos'] as $row) { ?>
                            <option <?php echo($row['Aula']==$this->detalles['datos'][0]['Aula']) ? "selected" : "" ; ?> value="<?php echo $row['Idaula'] ?>">
                                <?php echo $row['Aula'] ?></option>
                        <?php }    ?>
                    </select></p>
    <label>Detalles: </label>
    <p><textarea name="detalles" id=""><?php echo $this->detalles['datos'][0]['Detalles']?></textarea></p>

    <button class="btn btn-success btn-sm mr-4" type="submit">Guardar</button>
    <a class="btn btn-danger btn-sm" href="<?php echo constant('URL') ?>incidencias/mostrar">Volver</a>
    </form>
  </div>
  <? include 'includes/footer.php'; ?>
</body>
</html>