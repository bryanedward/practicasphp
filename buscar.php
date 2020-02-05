<?php

require 'admin/config.php';
require 'function.php';

$db_conexion = conexion($db_config);



if (!$db_conexion) {
  echo "not";
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
  $data = clearData($_GET['busqueda']);
  $statement = $db_conexion->prepare('SELECT * FROM publications WHERE title LIKE :search or description LIKE :search');

  $statement->execute(array(
    ':search'=> "%$data%" ));

  $data = $statement->fetchAll();

}else {
  echo "string";
}


require 'views/buscar.view.php';


?>
