<?php

    $host = "localhost";
    $username = "root";
    $port = 3306;
    $password = "";
    $db = "ptikuns";

    $koneksi = new PDO("mysql:host=$host:$port;dbname=$db", $username, $password);

?>