<?php

declare(strict_types=1);
require '../../include/funciones.php';
include '../../include/config/database.php';
$db = conectarDB();

$queryVendedor = 'SELECT * FROM vendedores';
$result_tablaVendedores = mysqli_query($db, $queryVendedor);

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}

//consultar 
$query = "SELECT * FROM propiedades WHERE id = {$id};";
$resultado = mysqli_query($db, $query);
$resultados_idPropiedades = mysqli_fetch_assoc($resultado);
//Definir variables del formulario 
$titulo = $resultados_idPropiedades['titulo'];
$precio = $resultados_idPropiedades['precio'];
$descripcion = $resultados_idPropiedades['descripcion'];
$habitaciones = $resultados_idPropiedades['habitaciones'];
$wc = $resultados_idPropiedades['wc'];
$estacionamientos = $resultados_idPropiedades['estacionamientos'];
$vendedores_id = $resultados_idPropiedades['vendedores_id'];
$imagen = $resultados_idPropiedades['imagen'];

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
    $creado = date("Y/m/d");
    //Guardar imagen
    $imagen = $_FILES['imagen'];


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

    //Validar imagen y tamaño 1mb = 1000byts
    $medida = 1000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores['imagen'] = 'La imagen supera los 100kb';
    }

    //Validar que este vacio el arreglo de errores 
    if (empty($errores)) {
        /*CREAR CARPETA */
        $carpetaImagenes = '../../imagenes/';
        //Verificar que exista
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreArchivo ='';

        if($imagen['name']){
            unlink($carpetaImagenes.$resultados_idPropiedades['imagen']);
            // Crear nombre unico
            $nombreArchivo = md5(uniqid(strval(rand()), true)) . '.jpg';
    
            //subir imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . '/' . $nombreArchivo);

        }else{
            $nombreArchivo = $resultados_idPropiedades['imagen'];
        }

        //Insertar en la base de datos 
        $query = "UPDATE propiedades SET titulo = '{$titulo}',precio = '{$precio}', imagen = '{$nombreArchivo}',descripcion =' {$descripcion}',habitaciones = '{$habitaciones}', wc = '{$wc}',estacionamientos = '{$estacionamientos}',vendedores_id = '{$vendedores_id}' WHERE id = {$id};";

        

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /admin?resultado=2');
        }
    }
}

incluirTemplate('header');
?>

<main class="contenedor">
    <h2>Actualizar</h2>
    <a href="/admin" class="btn-verde">Regresar</a>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>información General</legend>
            <div class="campo">
                <label for="titulo">Titulo</label>
                <input type="text" placeholder="Titulo de la propiedad" id="titulo" name="titulo" value="<?php echo $titulo ?>">
                <?php if (!empty($errores['titulo'])): ?>
                    <div class="alerta error"><?php echo $errores['titulo'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="precio">Precio</label>
                <input type="number" placeholder="Precio de la propiedad" id="precio" name="precio" value="<?php echo $precio ?>">
                <?php if (!empty($errores['precio'])): ?>
                    <div class="alerta error"><?php echo $errores['precio'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
                <img src="/imagenes/<?php echo $imagen?>" alt="" class="img-small">
                <?php if (!empty($errores['imagen'])): ?>
                    <div class="alerta error"><?php echo $errores['imagen'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
                <?php if (!empty($errores['descripcion'])): ?>
                    <div class="alerta error"><?php echo $errores['descripcion'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->
        </fieldset><!--fieldset - información general -->

        <fieldset>
            <legend>informació Propiedad</legend>
            <div class="campo">
                <label for="habitaciones">Habitaciones</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9" id="habitaciones" name="habitaciones" value="<?php echo $habitaciones ?>">
                <?php if (!empty($errores['habitaciones'])): ?>
                    <div class="alerta error"><?php echo $errores['habitaciones'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="wc">Baños</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9" id="wc" name="wc" value="<?php echo $wc ?>">
                <?php if (!empty($errores['wc'])): ?>
                    <div class="alerta error"><?php echo $errores['wc'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->

            <div class="campo">
                <label for="estacionamientos">Estacionamiento</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9" id="estacionamientos" name="estacionamientos" value="<?php echo $estacionamientos ?>">
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
                    <?php while ($row = mysqli_fetch_assoc($result_tablaVendedores)): ?>
                        <option <?php echo $vendedores_id === $row['id'] ? 'selected' : '' ?> value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] . ' ' . $row['apellido'] ?></option>
                    <?php endwhile ?>
                </select>
                <?php if (!empty($errores['vendedores_id'])): ?>
                    <div class="alerta error"><?php echo $errores['vendedores_id'] ?></div>
                <?php endif ?>
            </div><!--Campo  -->
        </fieldset><!--fieldset - información de la propiedad -->

        <div class="boton-contacto-block">
            <input type="submit" class="btn-verde-block" value="Actualizar">
        </div>
    </form>
</main><!--  -->

<?php
incluirTemplate('footer');
?>