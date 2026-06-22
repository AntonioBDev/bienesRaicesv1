<?php
declare(strict_types=1);
$resultado = $_GET['resultado'] ?? null;
require '../include/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor">
    <h1>Admin</h1>
    <?php if($resultado == 1 ):?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php endif?>
    <a href="/admin/propiedades/crear.php" class="btn-verde">Nueva propiedad</a>

    <table class="propiedades">
        <caption>Registro de propiedades</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Casa</td>
                <td><img src="/imagenes/1f52da8f985e4ce97430ad7b03c93c6f.jpg" alt="Imagen de la propiedad" class="imagen-propiedad"> </td>
                <td>$12,000</td>
                <td>
                    <a href="#">Actualizar</a>
                    <a href="#">Eliminar</a>     
                </td>
            </tr>
        </tbody>
    </table>
</main><!--  -->

<?php
incluirTemplate('footer');
?>