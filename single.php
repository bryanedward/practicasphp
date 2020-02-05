<?php
  require 'admin/config.php';
  require 'function.php';

  $db_conexion = conexion($db_config);
  $idPage = getId(getDatabyPage());

  $resultData = getDataById($idPage, $db_conexion);

  



  require 'views/single.view.php';
 ?>
