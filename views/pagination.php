<?php
  $total =  paginationPublications($blog_config, $db_conexion);
 ?>
<section class="paginacion">
  <ul>
    <?php if (getDatabyPage() === 1): ?>
      <li class="disabled">&laquo;</li>
    <?php else: ?>
      <li><a href="?page=<?php echo getDatabyPage() - 1 ?>">&laquo;</a></li>
    <?php endif; ?>


    <?php for ($i=1; $i <= $total; $i++) {
      echo"<li><a href='?page=$i'>$i</a></li>";
    }?>

    <?php if (getDatabyPage() === $total): ?>
      <li class="disabled">&raquo;</li>
    <?php else: ?>
      <li><a href="?page=<?php echo getDatabyPage() + 1; ?>">&raquo;</a></li>
    <?php endif; ?>

  </ul>
</section>
