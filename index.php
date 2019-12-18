<?php
// El orden es importante, no variar
  require_once 'config/config.php';
  require_once 'libs/database.php';
  require_once 'controllers/base.php';
  require_once 'views/base.php';
  require_once 'models/base.php';
  require_once 'libs/app.php';

  $app = new app();
?>