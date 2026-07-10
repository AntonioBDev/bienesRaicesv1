<?php
declare(strict_types=1);
require 'include/funciones.php';
require 'include/config/database.php';

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if(!$id){
  header('location: /');
}

$db = conectarDB();
$query = "SELECT * FROM propiedades where id = {$id};";
$resultados = mysqli_query($db, $query);
if($resultados->num_rows ===0){
  header('location: /');
}
$datos_propiedad = mysqli_fetch_assoc($resultados);


incluirTemplate('header');
?>

<main class="contenedor contenido-centrado">
  <h1><?php echo $datos_propiedad['titulo'];?></h1>
  <section class="contenido-anuncio">
    <div class="imagen">
        <img loading="lazy" src="/imagenes/<?php echo $datos_propiedad['imagen'];?>" alt="anuncio" />
    </div>
    <div class="resumen-propiedad">
      <p class="precio">$<?php echo $datos_propiedad['precio'];?></p>
      <ul class="iconos-caracteristicas">
        <li>
          <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
          <p><?php echo $datos_propiedad['wc'];?></p>
        </li>
        <li>
          <img class="img" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
          <p><?php echo $datos_propiedad['estacionamientos'];?></p>
        </li>
        <li>
          <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
          <p><?php echo $datos_propiedad['habitaciones'];?></p>
        </li>
      </ul>
      <p><?php echo $datos_propiedad['descripcion'];?></p>
  </section>
</main>
<!--  -->
<?php
incluirTemplate('footer');
?>