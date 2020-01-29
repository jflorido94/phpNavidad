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

    // var_dump($this->aulas['datos']);

    if (isset($_SESSION['useract'])) {
        header('location: ' . constant('URL') . 'panelcontrol');
    }

    // if (!isset($errorsql)) {
    //   echo "sql";
    //   echo $errorsql;
    // }
    ?>
    <div class="container row">
        <div class="col-2"></div>
        <div class="col">
            <form action="<?php echo constant('URL');?>incidencias/add" method="post">
                <h2>Nueva incidencia</h2>

                <p>
                    <!-- <label for="">Aula: </label> -->
                    <select name="aula">
                        <option selected>--Aula--</option>
                            <?php foreach ($this->aulas['datos'] as $row) {?>
                                <option value="<?php echo $row['Id']?>">
                                <?php echo $row['Aula'] ?></option>
                            <?php }    ?>
                    </select></p>
                <p><textarea name="detalles" id="" cols="30" rows="10" placeholder="Detalles"></textarea></p>
                <p><input class="btn btn-c1 rounded-pill shadow-sm px-3 text-titulo" type="submit" value="Agregar"></p>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
    <? include 'includes/footer.php'; ?>
</body>

</html>