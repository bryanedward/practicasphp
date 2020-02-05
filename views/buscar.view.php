
<?php require 'header.php' ?>

    <div class="contenedor">
      <div class="post">
        <?php foreach ($data as $key): ?>
          <article>
            <h3 class="titulo"><?php echo $key['title'] ?></h3>
            <p class="fecha"><?php echo fecha($key['date']); ?></p>
            <div class="thumb">
              <a href="single.php?page=<?php echo $key['id'];?>">
                <img src="./img/prueba.jpg" alt="">
              </a>
              <p class="extracto"><?php echo $key['description']; ?></p>
              <a href="#" class="continuar">Continuar leyendo <i class="fas fa-arrow-down"></i></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    
    </div>
    <?php require 'footer.php' ?>
