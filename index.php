<?php

declare(strict_types=1);
require 'include/funciones.php';

incluirTemplate('header', $inicio = true);
?>

<main class="seccion-iconos contenedor">
  <h2>más sobre nosotros</h2>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="" />
      <h3>seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Perspiciatis natus delectus, adipisci sunt ex dolores illo voluptate
        quaerat quidem tenetur reiciendis maiores maxime facilis ut
        inventore vitae recusandae impedit? Vitae.
      </p>
    </div>
    <!-- Campo -->
    <div class="icono">
      <img src="build/img/icono2.svg" alt="" />
      <h3>precio</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Perspiciatis natus delectus, adipisci sunt ex dolores illo voluptate
        quaerat quidem tenetur reiciendis maiores maxime facilis ut
        inventore vitae recusandae impedit? Vitae.
      </p>
    </div>
    <!-- Campo -->
    <div class="icono">
      <img src="build/img/icono3.svg" alt="" />
      <h3>a tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Perspiciatis natus delectus, adipisci sunt ex dolores illo voluptate
        quaerat quidem tenetur reiciendis maiores maxime facilis ut
        inventore vitae recusandae impedit? Vitae.
      </p>
    </div>
    <!-- Campo -->
  </div>
  <!-- campos -->
</main>
<!--main  -->

<section class="seccion-anuncios contenedor">
  <h2>casas y departamentos en venta</h2>
  <?php
  $limite = 3;
  require 'include/templates/anuncios.php';
  ?>
  <!-- contenedor-anuncios -->
  <div class="ver-todas">
    <a href="anuncios.php" class="btn-verde">ver todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h3 class="no-margin">encuentra la casa de tus sueños</h3>
  <p class="no-margin">
    llena el formulario de contacto y un asesor se pondrá en contacto
    contigo a la brevedad
  </p>
  <a href="contacto.html" class="btn-amarillo-inline">contactános</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro blog</h3>
    <article class="entrada-blog">
      <div class="imagen-entrada">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img
            loading="lazy"
            src="build/img/blog1.jpg"
            alt="entrada blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4 class="no-margin">Terraza en el techo de tu casa</h4>
          <p>Escrito el: <span>23/04/2026</span> Por: <span>Admin</span></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
            assumenda temporibus et optio nihil.
          </p>
        </a>
      </div>
    </article>
    <article class="entrada-blog">
      <div class="imagen-entrada">
        <picture>
          <source srcset="build/img/blog2.jpg type=" image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img
            loading="lazy"
            src="build/img/blog2.jpg"
            alt="entrada blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4 class="no-margin">Guia para la decoración de tu casa</h4>
          <p>Escrito el: <span>23/04/2026</span> Por: <span>Admin</span></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
            assumenda temporibus et optio nihil.
          </p>
        </a>
      </div>
    </article>
  </section>
  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eum nemo et debitis consequatur sunt deserunt? Culpa sed doloremque ratione, ab aut voluptas suscipit iure impedit. Assumenda, ullam deserunt. Fugit.</blockquote>
      <p>--nombre</p>
    </div>
  </section>
</div>

<?php
incluirTemplate('footer');
?>