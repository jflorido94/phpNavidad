<!-- ******Barra de navegacion Lateral******* -->
<nav class="lateral" id="lateral">
<a href="<?php echo constant('URL') ?>">
  <div class="py-4 px-3 mb-4 ">
    <div class="media d-flex align-items-center">
      <img src="<?php echo constant('URL') ?>images/avatar.png" alt="..." width="80" class="mr-3">
      <!-- rounded-circle img-thumbnail shadow -->
      <div class="media-body">
        <h4 class="m-0"><b>Menú</b></h4>
        <p class="text-muted mb-0">Ies San Sebastian</p>
      </div>
    </div>
  </div>
  </a>
  <div>
  <p class="text-uppercase px-3 pb-2 mb-0"><b>Incidencias</b></p>
  <ul class="nav flex-column mb-0">
    <li class="nav-item">
      <a href="<?php echo constant('URL') ?>incidencias/listado" class="mx-2 nav-link text-dark font-italic">
        <i class="fa fa-eye mr-2"></i>Ver</a>
    </li>
    <!-- <li class="nav-item">
      <a href="<?php echo constant('URL') ?>mensajes/listado" class="mx-2 nav-link text-dark font-italic">
        <i class="fa fa-comments mr-2"></i>Mensajes</a>
    </li> -->
  </ul>
  </div>
  <div class="
  <?php //echo ($_SESSION['Admin'] == 1)?'':'oculto';?>
  ">
  <p class="text-uppercase px-3 pb-2 pt-5 mb-0"><b>Usuarios</b></p>
    <ul class="nav flex-column mb-0">
      <li class="nav-item">
        <a href="<?php echo constant('URL') ?>profesores/solicitudes" class="mx-2 nav-link text-dark font-italic">
          <i class="fa fa-user-plus mr-2"></i>Solicitudes</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo constant('URL') ?>profesores/listado" class="mx-2 nav-link text-dark font-italic">
          <i class="fa fa-users mr-2"></i>Listado</a>
      </li>
    </ul>
  </div>
</nav>

<!-- ******Contenido de la pagina******* -->
<article class="" id="contenido">
  <nav class="" id="superior">
    <div class="d-flex justify-content-between">
      <div>
        <button id="ocultar" type="button" class="btn btn-c1 rounded-pill shadow-sm px-3 m-2 ml-4"><i class="fa fa-exchange"></i></button>
      </div>
      <!-- **********Cambiar por un menu desplegable ? -->
      <div>
        <a href="<?php echo constant('URL') ?>sesion">
          <button id="login" type="button" class="btn btn-c3 rounded-pill shadow-sm px-3 m-2"><i class="fa fa-sign-in mr-2"></i>Entrar</button></a>
        <a href="<?php echo constant('URL') ?>registro">
          <button id="register" type="button" class="btn btn-c3 rounded-pill shadow-sm px-3 m-2"><i class="fa fa-arrow-circle-o-down mr-2"></i>Registrarse</button>
        </a>
        <a href="<?php echo constant('URL') ?>sesion/salir">
          <button id="logout" type="button" class="oculto btn btn-c3 rounded-pill shadow-sm px-3 m-2 mr-4"><i class="fa fa-sign-out mr-2"></i>Cerrar Sesión</button>
        </a>
        <div>
        </div>
  </nav>