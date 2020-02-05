
<?php require 'header.php' ?>

    <div class="contenedor">
      <div class="post">
        <?php foreach ($resultData as $key): ?>
          <article>
            <h3 class="titulo"><?php echo $key['title'] ;?></h3>
            <p class="fecha"><?php echo fecha($key['date']) ;?></p>
            <div class="thumb">
                <img src="./img/prueba.jpg" alt="">
              <p class="extracto"><?php echo $key['description']; ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
    <?php require 'footer.php' ?>
