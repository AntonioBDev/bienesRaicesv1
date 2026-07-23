<?php
//importar la conexion 
require 'include/config/database.php';
require 'include/funciones.php';
$db = conectarDB();

//Crear un email y password
$email = 'br@gmail.com';
$password = 'root';

//Hashear 
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//query para crear el usuario 
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$passwordHash');";
exit;

//agregar a la BD
mysqli_query($db, $query);