<?php 
  include 'include/templates/header.php';
?>

  <main class="contenedor contenido-centrado">
    <h1>casa en venta frente al bosque</h1>
    <section class="contenido-anuncio">
      <div class="imagen">
        <picture>
          <source srcset="build/img/anuncio1.webp" type="image/webp" />
          <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
        </picture>
      </div>
      <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="img" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p>2</p>
          </li>
        </ul>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore doloremque possimus, voluptatem recusandae
          amet architecto animi eaque odio consectetur, accusamus illo, asperiores excepturi explicabo tempore
          repellendus omnis quas totam nulla.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis rem quod dicta cupiditate magnam ut,
          quaerat porro sint, unde at minus hic eum voluptatem dolorum cum tenetur ipsam, quidem consequuntur.</p>
      </div>
    </section>
  </main>
  <!--  -->
<?php
include 'include/templates/footer.php';
?>