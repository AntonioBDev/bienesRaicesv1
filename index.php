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
  <div class="contenendor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3 class="no-margin">Casa de lujo en el lago</h3>
        <p class="no-margin">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis
          delectus quasi reprehenderit impedit aliquid.
        </p>
        <p class="precio no-margin">$3,000,000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img
              loading="lazy"
              src="build/img/icono_wc.svg"
              alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img
              class="img"
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="icono dormitorio" />
            <p>2</p>
          </li>
        </ul>

        <a href="anuncios.html" class="btn btn-amarillo-block"> ver propiedad </a>
      </div>
    </div>
    <!-- Anuncio -->

    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3 class="no-margin">Casa de lujo en el lago</h3>
        <p class="no-margin">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis
          delectus quasi reprehenderit impedit aliquid.
        </p>
        <p class="precio no-margin">$3,000,000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img
              loading="lazy"
              src="build/img/icono_wc.svg"
              alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img
              class="img"
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="icono dormitorio" />
            <p>2</p>
          </li>
        </ul>

        <a href="anuncios.html" class="btn btn-amarillo-block"> ver propiedad </a>
      </div>
    </div>
    <!-- Anuncio -->

    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3 class="no-margin">Casa de lujo en el lago</h3>
        <p class="no-margin">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis
          delectus quasi reprehenderit impedit aliquid.
        </p>
        <p class="precio no-margin">$3,000,000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img
              loading="lazy"
              src="build/img/icono_wc.svg"
              alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img
              class="img"
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="icono dormitorio" />
            <p>2</p>
          </li>
        </ul>

        <a href="anuncios.html" class="btn btn-amarillo-block"> ver propiedad </a>
      </div>
    </div>
    <!-- Anuncio -->
  </div>
  <!-- contenedor-anuncios -->
  <div class="ver-todas">
    <a href="anuncios.html" class="btn-verde">ver todas</a>
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