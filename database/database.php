<?php
    define("localhost", DB_SERVER);
    define("root", DB_USER);
    define("", DB_PASS);
    define("suther", DB_NAME);

    $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    
    mysqli_set_charset($conexion, "utf-8");

    if(!$conexion){
    	exit("Error en la conexion: " . mysqli_connect_error());
    }
?>