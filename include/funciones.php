<?php
require 'app.php';

function incluirTemplate(string $nombre, bool $inicio = false)
{
    include TEMPLATES_URL . "/{$nombre}.php";
}

function debug($dato)
{
    echo '<pre>';
    var_dump($dato);
    echo '</pre>';
    exit;
}
