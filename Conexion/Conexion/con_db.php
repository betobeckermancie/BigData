<?php

//conectarnos con el servidor AZURE
$host ="beto.mysql.database.azure.com";
$user ="admi@beto";
$pass ="Beto1234567_";
$db="beto";

// conectar APP de PHP con DB en la nube MYSQL AZURE
$conn=mysqli_init();
mysqli_real_connect($conn, $host, $user, $pass, $db, 3306);

$conectar=@mysqli_connect($host,$user,$pass,$db) or die("Problemas al conectar");
//verificamos la conexion
mysqli_select_db($conectar,$db)or die("problemas al conectar con la base de datos");

?>