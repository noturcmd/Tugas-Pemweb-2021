<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "ptikuns";

    function query(String $query){
        global $host, $user, $password, $db;
        $connection = mysqli_connect($host, $user, $password, $db);
        $getDataDB = mysqli_query($connection, $query);
        return $getDataDB;
    }

?>