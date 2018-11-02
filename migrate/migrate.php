<?php

    $host = 'localhost';
    $dbName = 'playgroup_db';
    $dsn = "mysql:host=$host; dbname=$dbName; port=3306; charse=utf8mb4";
    $user = 'root';
    $pass = 'root';
    $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try{
        $conn = new PDO ($dsn, $user, $pass, $opt);
    }catch (PDOException $exception){
        echo $exception->getMessage();
    }

    $getAllMovies = $conn->query("
        INSERT INTO nombre_tabla (columna1, columna2, columna3,.) 
        VALUES (valor1, valor2, valor3, .)
    ");

$allMoviesResult = $getAllMovies->fetchAll(PDO::FETCH_OBJ);