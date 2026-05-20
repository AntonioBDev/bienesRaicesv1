<?php 
declare(strict_types=1);

require 'include/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor pagina-seccion-blog">
        <h1>blog</h1>
          <article class="entrada-blog">
            <div class="imagen-entrada">
              <picture>
                <source srcset="build/img/blog1.webp" type="image/webp" />
                <source srcset="build/img/blog1.jpg" type="image/jpeg" />
                <img
                  loading="lazy"
                  src="build/img/blog1.jpg"
                  alt="entrada blog"
                />
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
              <source srcset="build/img/blog2.jpg type="image/webp" />
              <source srcset="build/img/blog2.jpg" type="image/jpeg" />
              <img
                loading="lazy"
                src="build/img/blog2.jpg"
                alt="entrada blog"
              />
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
    </main><!--  -->


<?php
incluirTemplate('footer');
?>