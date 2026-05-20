<?php 
declare(strict_types=1);

  require 'include/funciones.php';
incluirTemplate('header');
?>

    <main class="pagina-seccion-anuncios contenedor">
      <h1>Anuncios</h1>
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
                  alt="icono wc"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="img"
                  loading="lazy"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  loading="lazy"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono dormitorio"
                />
                <p>2</p>
              </li>
            </ul>

            <a href="anuncio.html" class="btn btn-amarillo"> ver propiedad </a>
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
                  alt="icono wc"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="img"
                  loading="lazy"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  loading="lazy"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono dormitorio"
                />
                <p>2</p>
              </li>
            </ul>

            <a href="anuncio.html" class="btn btn-amarillo"> ver propiedad </a>
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
                  alt="icono wc"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="img"
                  loading="lazy"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  loading="lazy"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono dormitorio"
                />
                <p>2</p>
              </li>
            </ul>

            <a href="anuncio.html" class="btn btn-amarillo"> ver propiedad </a>
          </div>
        </div>
        <!-- Anuncio -->
      </div>
      <!-- contenedor-anuncios -->
      <div class="ver-todas">
        <a href="anuncios.html" class="btn-verde">ver todas</a>
      </div>
    </main>
    <!--  -->

  <?php
incluirTemplate('footer');
?>
