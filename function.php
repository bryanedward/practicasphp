<?php
// TODO: esta clase esta fabrica con el fin de reutilizar codigo
  function conexion($db_config){
    // TODO: funcion para la conexion a la base de datos
    try {
      $conexion = new PDO('mysql:host=localhost;dbname='.$db_config['db'] ,$db_config['user'], $db_config['pass']);
      return $conexion;
    } catch (PDOException $e) {
      return false;
    }
  }

  function clearData($data){
    // TODO: limpiar datos
    $datos = trim($data);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
  }


  function getDatabyPage(){
    // TODO: condicional para indentificar la pagina
    return isset($_GET['page']) ? (int)$_GET['page'] : 1;
  }


  function getPostDB($postForPage, $DB){
    // TODO: obtener las cantidades de las publicaciones
    $start = (getDatabyPage() > 1) ? (getDatabyPage() * $postForPage) - $postForPage : 0;
    $sentence = $DB->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM publications LIMIT $start, $postForPage");
    $sentence->execute();
    return $sentence->fetchAll();
  }


  function getId($id){
    // TODO: obtener el id de la publicacion para presentar la publicacion adecuada en la single.php
    return (int)clearData($id);
  }


  function getDataById($idPage, $DB){
    // TODO: buscar publicacion por id
    $resultData = $DB->query("SELECT * FROM publications WHERE id = $idPage");
    $resultData = $resultData->fetchAll();
    return ($resultData) ? $resultData : false;
  }


  function paginationPublications($blog_config, $DB){
    // TODO: funcion para averiguar cuandas paginaciones habran en total
    $totalPage = $DB->query('SELECT FOUND_ROWS() AS total');
    $totalPage = $totalPage->fetch()['total'];
    $paginationTotal = ceil( $totalPage / $blog_config['limit_pg']);
    return $paginationTotal;
  }



  function fecha($date){
    // TODO: convertir fecha
    $timestamp = strtotime($date);
    $moth = ['Enero','Febrero','Marzo',
    'Abril','Mayo','Junio','Julio','Agosto','Septiembre',
    'Octubre','Noviembre','Diciembre'];
    $day = date("d", $timestamp);
    $mothNum = date("m", $timestamp) - 1;
    $year = date("y", $timestamp);
    return $day . " - " . $moth[$mothNum] ." - " .$year;
  }


 ?>
