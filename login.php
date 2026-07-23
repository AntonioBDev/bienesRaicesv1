<?php 
declare(strict_types=1);
  require 'include/funciones.php';
incluirTemplate('header');
?>

    <main>
        <h1>Iniciar Sesion</h1>
        <form class="formulario contenedor contenido-centrado">
            <fieldset>
                <legend>Email y Password</legend>
                <div class="email campo">
                  <label for="email">E-mail</label>
                  <input type="email" id="email" />
                </div>
    
                <div class="telefono campo">
                  <label for="password">Telefono</label>
                  <input type="password" id="password" />
                </div>
            </fieldset>

            <input type="submit" value="Iniciar Sesion" class="btn-verde-block">
        </form>
    </main><!--  -->

<?php
incluirTemplate('footer');
?>