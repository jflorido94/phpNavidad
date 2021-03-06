<!-- ******Barra de navegacion Lateral******* -->
<nav class="lateral" id="lateral">
<a href="<?php echo constant('URL') ?>">
  <div class="py-4 px-3 mb-4 ">
    <div class="media d-flex align-items-center">
      <img src="<?php echo constant('URL') ?>images/avatar.png" alt="..." width="80" class="mr-3">
      <!-- rounded-circle img-thumbnail shadow -->
      <div class="media-body">
        <h4 class="m-0"><b  class="text-titulo">Menú</b></h4>
        <p class="text-muted mb-0">Ies San Sebastian</p>
      </div>
    </div>
  </div>
  </a>
  <div>
  <p class="text-uppercase px-3 pb-2 mb-0"><b  class="text-muted">Incidencias</b></p>
  <ul class="nav flex-column mb-0">
    <li class="nav-item">
      <a href="<?php echo constant('URL') ?>incidencias/mostrar" class="mx-2 nav-link text-titulo font-italic">
        <i class="fa fa-eye mr-2 text-titulo"></i>Ver</a>
    </li>
    <li class="nav-item">
      <a href="<?php echo constant('URL') ?>incidencias/anadir" class="mx-2 nav-link text-titulo font-italic">
        <i class="fa fa-plus mr-2 text-titulo"></i>Añadir</a>
    </li>
  </ul>
  </div>
  <div>
  <?php if (UserSession::getCurrentUserAdmin()) {?>
    
  <p class="text-uppercase px-3 pb-2 pt-5 mb-0"><b class="text-muted">Usuarios</b></p>
    <ul class="nav flex-column mb-0">
      <li class="nav-item">
        <a href="<?php echo constant('URL') ?>profesores/solicitudes" class="mx-2 nav-link text-titulo font-italic">
          <i class="fa fa-user-plus mr-2 text-titulo"></i>Solicitudes</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo constant('URL') ?>profesores/mostrar" class="mx-2 nav-link text-titulo font-italic ">
          <i class="fa fa-users mr-2 text-titulo"></i>Listado</a>
      </li>
    </ul>
    <?php } ?>
  </div>
</nav>
<!-- ******Contenido de la pagina******* -->
<article class="" id="contenido">
  <nav class="fijo" id="superior">
    <div class="d-flex justify-content-between">
      <div>
        <button id="ocultar" type="button" class="btn btn-c1 rounded-pill shadow-sm px-3 m-2 ml-4"><i class="fa fa-exchange text-titulo"></i></button>
      </div>
      <!-- **********Cambiar por un menu desplegable ? -->
      <div>
        <?php
        if (!UserSession::existCurrentUser()) { ?>
        <a href="<?php echo constant('URL') ?>sesion">
          <button id="login" type="button" class="btn btn-c3 rounded-pill shadow-sm px-3 m-2 text-titulo"><i class="fa fa-sign-in mr-2 text-titulo"></i>Entrar</button></a>
        <a href="<?php echo constant('URL') ?>registro">
          <button id="register" type="button" class="btn btn-c3 rounded-pill shadow-sm px-3 m-2 text-titulo"><i class="fa fa-arrow-circle-o-down mr-2 text-titulo"></i>Registrarse</button>
        </a>
        <?php }else{?>
        <a href="<?php echo constant('URL') ?>sesion/salir">
          <button id="logout" type="button" class=" btn btn-c3 rounded-pill shadow-sm px-3 m-2 mr-4 text-titulo"><i class="fa fa-sign-out mr-2 text-titulo"></i>Cerrar Sesión</button>
        </a>
        <?php } ?>
        <div>
        </div>
  </nav>
  <div class="pagweb ">