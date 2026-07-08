<?php

declare(strict_types=1);
require '../include/config/database.php';
require '../include/funciones.php';

//DB
//importar la conexion
$db = conectarDB();
//Escribir el query
$query = "SELECT * FROM propiedades;";
//Consultar DB
$consulta_tabla_propiedades = mysqli_query($db, $query);

//Mensaje condicional
$resultado = $_GET['resultado'] ?? null;

//
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {
        //Eliminar la imagen dentro de archivos
        $query = "SELECT imagen FROM propiedades WHERE id = {$id};";
        $resultado = mysqli_query($db, $query);
        $imagen_propiedades = mysqli_fetch_assoc($resultado);

        //identificar archivo 
        unlink('../imagenes/' . $imagen_propiedades['imagen']);

        //Elimar de la base de datos 
        $query = "DELETE FROM propiedades where id = {$id};";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('location: /admin?resultado=3');
        }
    }
}

//Incluye un template 
incluirTemplate('header');
?>

<main class="contenedor">
    <h1>Admin</h1>
    <?php if (intval($resultado) === 1): ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
    <?php elseif (intval($resultado) === 2): ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif (intval($resultado) === 3): ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>
    <?php endif ?>
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
            <?php while ($row = mysqli_fetch_assoc($consulta_tabla_propiedades)): ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['titulo'] ?></td>
                    <td><img src="/imagenes/<?php echo $row['imagen'] ?>" alt="Imagen de la propiedad" class="imagen-propiedad"> </td>
                    <td>$<?php echo $row['precio'] ?></td>
                    <td>
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $row['id'] ?>" class="btn-amarillo-block">Actualizar</a>
                        <form method="post" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="submit" value="Eliminar" class="btn-rojo-block">
                        </form>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</main><!--  -->

<?php
mysqli_close($db);
incluirTemplate('footer');
?>