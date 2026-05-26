<?php
    declare(strict_types=1);
    require '../../include/funciones.php';
    include '../../include/config/database.php';
    $db = conectarDB();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $titulo = $_POST['titulo'];
       $precio = $_POST['precio'];
       $descripcion = $_POST['descripcion'];
       $habitaciones = $_POST['habitaciones'];
       $wc = $_POST['wc'];
       $estacionamientos = $_POST['estacionamientos'];
       $vendedores_id = $_POST['vendedores_id'];

       //Insertar en la base de datos 
       $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamientos, vendedores_id) VALUE ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamientos', '$vendedores_id')";
    
       echo $query;
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
                <input type="text" placeholder="Titulo de la propiedad" id="titulo" name="titulo">
            </div><!--Campo  -->

            <div class="campo">
                <label for="precio">Precio</label>
                <input type="number" placeholder="Precio de la propiedad" id="precio" name="precio">
            </div><!--Campo  -->

            <div class="campo">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">
            </div><!--Campo  -->

            <div class="campo">
                <label for="descripcion">Descripción</label>
                <textarea type="text" id="descripcion" name="descripcion"></textarea>
            </div><!--Campo  -->
        </fieldset><!--fieldset - información general -->

        <fieldset>
            <legend>informació Propiedad</legend>
            <div class="campo">
                <label for="habitaciones">Habitaciones</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9"  id="habitaciones" name="habitaciones">
            </div><!--Campo  -->

            <div class="campo">
                <label for="wc">Baños</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9"  id="wc" name="wc">
            </div><!--Campo  -->

            <div class="campo">
                <label for="estacionamientos">Estacionamiento</label>
                <input type="number" placeholder="Ej: 3" min="1" max="9"  id="estacionamientos" name="estacionamientos">
            </div><!--Campo  -->
        </fieldset><!--fieldset - información de la propiedad -->

          <fieldset>
            <legend>Vendedor</legend>
            <div class="campo">
                <select name="vendedores_id">
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