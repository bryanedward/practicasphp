<?php

  require 'admin/config.php';
  require 'function.php';

  $db_conexion = conexion($db_config);



  if (!$db_conexion) {
    echo "not";
  }


  $data = getPostDB($blog_config['limit_pg'], $db_conexion);

  if (!$data) {
    header ('Location: index.php');
  }

  require 'views/index.view.php';
 ?>
