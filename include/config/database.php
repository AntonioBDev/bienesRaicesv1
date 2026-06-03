<?php 

    $host= 'localhost';
    $perfil = 'root';
    $password = 'root';
    $nombreProyecto= 'bienesraices_crud_2';

    


    function conectarDB() : mysqli{
        $db = mysqli_connect('192.168.1.88', 'remote', 'rootroot123*', 'bienesraices_crud_2');

        if(!$db){
            echo 'No se pudo conectar';
            exit;
        }

        return $db;
    }
?>