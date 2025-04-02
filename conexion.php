<?php

    function conexion(){

    $host = "host=dpg-cvmpkpu3jp1c73aufl0g-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_1ojf";
    $user = "user=gdaniel";
    $password = "password=0NmFc8wQbrIDqtPAK4nKzdwARVGvVVFR";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
    }
?>
