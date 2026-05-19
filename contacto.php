<?php 
  include 'include/templates/header.php';
?>

    <main class="contenedor contacto">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/blog1.webp" type="image/webp" />
        <source srcset="build/img/blog1.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/blog1.jpg" alt="contacto" />
      </picture>

      <section>
        <h2>Llena el formulario</h2>
        <form action="" class="formulario">
          <fieldset class="informacion-personal">
            <legend>informacion personal</legend>
            <div class="grid">
                <div class="nombre campo">
                  <label for="nombre">nombre</label>
                  <input type="text" id="nombre" />
                </div>
    
                <div class="email campo">
                  <label for="email">E-mail</label>
                  <input type="email" id="email" />
                </div>
    
                <div class="telefono campo">
                  <label for="telefono">Telefono</label>
                  <input type="tel" id="telefono" />
                </div>
    
                <div class="mensaje campo">
                  <label for="mensaje">Mensaje</label>
                  <textarea name="mensaje" id="mensaje"></textarea>
                </div>
            </div>
          </fieldset>

          <fieldset class="informacion-propiedad">
            <legend>informacion sobre propiedad</legend>
            <div class="grid">
                <div class="venta-compra campo">
                  <label for="venta-compra">Venta o Compra</label>
                  <select name="" id="venta-compra">
                    <option value="" selected disabled>--seleccione--</option>
                    <option value="venta">Venta</option>
                    <option value="compra">Compra</option>
                  </select>
                </div>
                <div class="cantidad campo">
                  <label for="cantidad">Cantidad</label>
                  <input type="number" id="cantidad" />
                </div>
            </div>
          </fieldset>

          <fieldset class="campo-contacto">
            <legend>Contacto</legend>
            <div class="grid">
                <div class="medios-contacto">
                  <p>Seleccione medio de contacto</p>
                  <div class="flex">
                      <div class="telefono medios-contacto__flex">
                        <label for="tel">telefono</label>
                        <input name="medios-contacto" type="radio" id="tel" />
                      </div>
                      <div class="email medios-contacto__flex">
                        <label for="mail">E-mail</label>
                        <input name="medios-contacto" type="radio" id="mail" />
                      </div>
                  </div>
                </div>
    
                <div class="date campo">
                  <p>Seleccione fecha para contactarlo(a)</p>
                  <label for="date">Fecha</label>
                  <input type="date" id="date" />
                </div>
    
                <div class="hora campo">
                  <label for="hora">Hora</label>
                  <input
                    type="time"
                    id="hora"
                    min="09:00"
                    max="18:00"
                    value="10:00"
                  />
                </div>
            </div>
          </fieldset>
          <div class="boton-contacto-block">
              <input type="submit" value="Enviar" class="btn-verde-block">
          </div>
        </form>
      </section>
    </main>
    <!--  -->
<?php
include 'include/templates/footer.php';
?>