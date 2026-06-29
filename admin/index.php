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

//Incluye un template 
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
            <?php while($row = mysqli_fetch_assoc($consulta_tabla_propiedades)):?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['titulo']?></td>
                <td><img src="/imagenes/<?php echo $row['imagen']?>" alt="Imagen de la propiedad" class="imagen-propiedad"> </td>
                <td>$<?php echo $row['precio']?></td>
                <td>
                    <a href="#" class="btn-amarillo-block">Actualizar</a>
                    <a href="#" class="btn-rojo-block">Eliminar</a>     
                </td>
            </tr>
            <?php endwhile?>
        </tbody>
    </table>
</main><!--  -->

<?php
incluirTemplate('footer');
?>