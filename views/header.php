<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/6986ffb7a8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/estilos.css">
  <title>Pagina Principal</title>
  </head>
  <body>
    <header>
      <div class="contenedor">
        <div class="logo izquierda">
          <p>
            <a href= "<?php  echo RUTA;?>">DesarrolladorJunior</a>
          </p>
        </div>
        <div class="derecha">
          <form name="busqueda" class="buscar" action="<?php echo RUTA;?>/buscar.php" method="get">
            <input type="text" name="busqueda" value="" placeholder="buscar">
            <button type="submit" class="icono fa fa-search"></button>
          </form>
          <nav class="menu">
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-github-square"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
          </nav>
        </div>
      </div>
    </header>
