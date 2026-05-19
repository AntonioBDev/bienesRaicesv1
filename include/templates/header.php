<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="build/css/app.css" />
  </head>
  <body>
    <script>
        if (localStorage.getItem('estadoDarkMode') === 'true') {
            document.body.classList.add('dark-mode-body');
        }
    </script>
    
    <header class="header <?php echo isset($inicio) ? 'inicio': '' ?>">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/">
            <img src="build/img/logo.svg" alt="logo" />
          </a>

          <div class="movil-menu">
            <img src="build/img/barras.svg" alt="">
          </div>

          <div class="derecha">
            <img loading="lazy" src="build/img/dark-mode.svg" alt="" class="dark-mode">
            <nav class="navegacion">
              <a href="nosotros.php" class="enlace">nosotros</a>
              <a href="anuncios.php" class="enlace">anuncios</a>
              <a href="blog.php" class="enlace">blog</a>
              <a href="contacto.php" class="enlace">contacto</a>
            </nav>
          </div>

        </div>
        <?php if($inicio):?>
        <h1>Venta de casas y departamentos exclusivos de lujo</h1>
        <?php endif?>
      </div>
    </header>