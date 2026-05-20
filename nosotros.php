<?php
declare(strict_types=1);
require 'include/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor pagina-seccion-nosotros">
  <h1>conoce sobre nosotros</h1>
  <section class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/nosotros.jpg"
          alt="sobre nosotros" />
      </picture>
    </div>
    <div class="texto-nosotros">
      <blockquote>25 años de Experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sed
        mollitia consectetur expedita quis, recusandae iste dolorem
        asperiores aspernatur doloremque illo sint eos accusantium dolor,
        cupiditate, impedit voluptate maxime. Dignissimos.
      </p>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum
        possimus, necessitatibus unde excepturi vero est amet iure
        voluptatum, molestiae libero tenetur odit, autem quam ad neque
        ratione nemo doloremque animi?
      </p>
    </div>
  </section>
</main>
<!--  -->

<section class="seccion-iconos contenedor">
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
</section>

<?php
incluirTemplate('footer');
?>