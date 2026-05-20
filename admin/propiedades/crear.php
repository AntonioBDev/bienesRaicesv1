<?php

declare(strict_types=1);
require '../../include/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor">
    <h2>Crear</h2>
    <a href="/admin" class="btn-verde">Regresar</a>

    <form action="" class="formulario">
        <fieldset>
            <legend>información General</legend>
            <div class="campo">
                <label for="titulo">Titulo</label>
                <input type="text" placeholder="Titulo de la propiedad" id="titulo">
            </div><!--Campo  -->

            <div class="campo">
                <label for="precio">Precio</label>
                <input type="number" placeholder="Precio de la propiedad" id="precio">
            </div><!--Campo  -->

            <div class="campo">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">
            </div><!--Campo  -->

            <div class="campo">
                <label for="descripcion">Descripción</label>
                <textarea type="text" id="descripcion"></textarea>
            </div><!--Campo  -->
        </fieldset><!--fieldset - información general -->

        <fieldset>
            <legend>informació Propiedad</legend>
            <div class="campo">
                <label for="habitaciones">Habitaciones</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9"  id="habitacion">
            </div><!--Campo  -->

            <div class="campo">
                <label for="wc">Baños</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9"  id="wc">
            </div><!--Campo  -->

            <div class="campo">
                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9"  id="estacionamiento">
            </div><!--Campo  -->
        </fieldset><!--fieldset - información de la propiedad -->

          <fieldset>
            <legend>Vendedor</legend>
            <div class="campo">
                <select>
                    <option value="1">juan</option>
                    <option value="2">lorena</option>
                </select>
            </div><!--Campo  -->
        </fieldset><!--fieldset - información de la propiedad -->

        <div class="boton-contacto-block">
            <input type="submit" class="btn-verde-block" value="Crear">
        </div>
    </form>
</main><!--  -->

<?php
incluirTemplate('footer');
?>