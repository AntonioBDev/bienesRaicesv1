 <?php
    require 'include/config/database.php';

    $db = conectarDB();
    $query = "SELECT * FROM propiedades LIMIT {$limite};";
    $resultados = mysqli_query($db, $query);
    ?>

 <div class="contenendor-anuncios">
     <?php while ($row = mysqli_fetch_assoc($resultados)): ?>

         <div class="anuncio">
                 <img loading="lazy" src="imagenes/<?php echo $row['imagen'];?>" alt="anuncio" />
             <div class="contenido-anuncio">
                 <h3 class="no-margin"><?php echo $row['titulo'];?></h3>
                 <p class="no-margin">
                     <?php echo $row['descripcion'];?>
                 </p>
                 <p class="precio no-margin">$<?php echo $row['precio'];?></p>
                 <ul class="iconos-caracteristicas">
                     <li>
                         <img
                             loading="lazy"
                             src="build/img/icono_wc.svg"
                             alt="icono wc" />
                         <p><?php echo $row['wc'];?></p>
                     </li>
                     <li>
                         <img
                             class="img"
                             loading="lazy"
                             src="build/img/icono_estacionamiento.svg"
                             alt="icono estacionamiento" />
                         <p><?php echo $row['estacionamientos'];?></p>
                     </li>
                     <li>
                         <img
                             loading="lazy"
                             src="build/img/icono_dormitorio.svg"
                             alt="icono dormitorio" />
                         <p><?php echo $row['habitaciones'];?></p>
                     </li>
                 </ul>

                 <a href="anuncio.php?id=<?php echo $row['id']?>" class="btn btn-amarillo-block"> ver propiedad </a>
             </div>
         </div>
         <!-- Anuncio -->
     <?php endwhile ?>
 </div>