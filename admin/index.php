<?php 
declare(strict_types=1);
  require '../include/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor">
        <h1>Admin</h1>
        <a href="/admin/propiedades/crear.php" class="btn-verde">Nueva propiedad</a>
        <table>
            <caption>Registro de propiedades</caption>
            <tr>
                <th>Encabezado 1</th>
                <th>Encabezado 2</th>
            </tr>
            <tr>
                <td>f </td>
                <td>3 </td>
            </tr>
        </table>
    </main><!--  -->

<?php
incluirTemplate('footer');
?>