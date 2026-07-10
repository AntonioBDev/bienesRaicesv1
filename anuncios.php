<?php

declare(strict_types=1);

require 'include/funciones.php';
incluirTemplate('header');
?>

<main class="pagina-seccion-anuncios contenedor">
  <h1>Anuncios</h1>
  <?php
  $limite = 10;
  require 'include/templates/anuncios.php'
  ?>
  <!-- contenedor-anuncios -->
</main>
<!--  -->

<?php
incluirTemplate('footer');
?>