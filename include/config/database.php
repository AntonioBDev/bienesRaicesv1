<?php
function conectarDB(): mysqli
{
    //local
    // $host= 'localhost';
    // $perfil = 'root';
    // $password = 'root';
    // $nombreProyecto= 'bienesraices_crud_2';

    //remoto
    // $host = '192.168.1.88';
    // $perfil = 'remote';
    // $password = 'rootroot123*';
    // $nombreProyecto = 'bienesraices_crud_2';
    // $db = mysqli_connect($host, $perfil, $password, $nombreProyecto);

    //remoto hostinger
    $host = 'srv526.hstgr.io';
    $perfil = 'u842510402_bienesraices';
    $password = 'RneQ9RO1';
    $nombreProyecto = 'u842510402_b_r_crud2';
    $db = mysqli_connect($host, $perfil, $password, $nombreProyecto);


    if (!$db) {
        echo 'No se pudo conectar';
        exit;
    }

    return $db;
}
