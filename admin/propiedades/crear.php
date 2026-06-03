<?php

declare(strict_types=1);
require '../../include/funciones.php';
include '../../include/config/database.php';
$db = conectarDB();

$queryVendedor = 'SELECT * FROM vendedores';

$result_tablaVendedores = mysqli_query($db, $queryVendedor);

//Definir variables del formulario 
$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamientos = '';
$vendedores_id = '';

//Arreglo de errores por vacio de campo
$errores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $precio = $_POST['precio'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $habitaciones = $_POST['habitaciones'] ?? '';
    $wc = $_POST['wc'] ?? '';
    $estacionamientos = $_POST['estacionamientos'] ?? '';
    $vendedores_id = $_POST['vendedores_id'] ?? '';


    //Validar campos 
    if (!$titulo) {
        $errores['titulo'] = 'Debes añadir un titulo';
    }

    if (!$precio) {
        $errores['precio'] = 'Debes añadir un precio';
    }

    if (!$descripcion) {
        $errores['descripcion'] = 'Debes añadir una descripcion';
    }

    if (!$habitaciones) {
        $errores['habitaciones'] = 'El numero de habitaciones es obligatorio';
    }
    if (!$wc) {
        $errores['wc'] = 'El numero de baños es obligatorio';
    }

    if (!$estacionamientos) {
        $errores['estacionamientos'] = 'El numero de estacionamientos es obligatorio';
    }

    if (!$vendedores_id) {
        $errores['vendedores_id'] = 'Elige un vendedor';
    }

    //Validar que este vacio el arreglo de errores 
    if (empty($errores)) {
        //Insertar en la base de datos 
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamientos, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamientos', '$vendedores_id');";

        echo $query;
    }
}
incluirTemplate('header');
?>

<main class="contenedor">
    <h2>Crear</h2>
    <a href="/admin" class="btn-verde">Regresar</a>

    <form action="/admin/propiedades/crear.php" class="formulario" method="POST">
        <fieldset>
            <legend>información General</legend>
            <div class="campo">
                <label for="titulo">Titulo</label>
                <input type="text" placeholder="Titulo de la propiedad" id="titulo" name="titulo" value="<?php echo $titulo?>">
                <?php if (!empty($errores['titulo'])): ?>
                    <div class="alerta error"><?php echo $errores['titulo'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="precio">Precio</label>
                <input type="number" placeholder="Precio de la propiedad" id="precio" name="precio" value="<?php echo $precio?>">
                 <?php if (!empty($errores['precio'])): ?>
                    <div class="alerta error"><?php echo $errores['precio'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">
            </div><!--Campo  -->

            <div class="campo">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion?></textarea>
                 <?php if (!empty($errores['descripcion'])): ?>
                    <div class="alerta error"><?php echo $errores['descripcion'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->
        </fieldset><!--fieldset - información general -->

        <fieldset>
            <legend>informació Propiedad</legend>
            <div class="campo">
                <label for="habitaciones">Habitaciones</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9" id="habitaciones" name="habitaciones" value="<?php echo $habitaciones?>">
                 <?php if (!empty($errores['habitaciones'])): ?>
                    <div class="alerta error"><?php echo $errores['habitaciones'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="wc">Baños</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9" id="wc" name="wc" value="<?php echo $wc?>">
                 <?php if (!empty($errores['wc'])): ?>
                    <div class="alerta error"><?php echo $errores['wc'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="estacionamientos">Estacionamiento</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9" id="estacionamientos" name="estacionamientos" value="<?php echo $estacionamientos?>">
                 <?php if (!empty($errores['estacionamientos'])): ?>
                    <div class="alerta error"><?php echo $errores['estacionamientos'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->
        </fieldset><!--fieldset - información de la propiedad -->

        <fieldset>
            <legend>Vendedor</legend>
            <div class="campo">
                <select name="vendedores_id">
                    <option value="" selected disabled>-- Seleccione --</option>
                    <?php while($row = mysqli_fetch_assoc($result_tablaVendedores)):?>
                        <option <?php echo $vendedores_id === $row['id'] ? 'selected' : '' ?> value="<?php echo $row['id']?>"><?php echo $row['nombre'].' ' . $row['apellido']?></option>
                    <?php endwhile?>
                </select>
                 <?php if (!empty($errores['vendedores_id'])): ?>
                    <div class="alerta error"><?php echo $errores['vendedores_id'] ?></div>
                <?php endif ?>
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