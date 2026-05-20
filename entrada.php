<?php 
declare(strict_types=1);

 require 'include/funciones.php';
incluirTemplate('header');
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
        <div class="texto-entrada">
           <p>Escrito el: <span>23/04/2026</span> Por: <span>Admin</span></p>
                <p>
         
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore doloremque possimus, voluptatem recusandae amet architecto animi eaque odio consectetur, accusamus illo, asperiores excepturi explicabo tempore repellendus omnis quas totam nulla.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis rem quod dicta cupiditate magnam ut, quaerat porro sint, unde at minus hic eum voluptatem dolorum cum tenetur ipsam, quidem consequuntur.</p>
        </div>
      </section>
    </main>
    <!--  -->

 <?php
incluirTemplate('footer');
?>