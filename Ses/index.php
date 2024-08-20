<?php

    session_start();
    

    if(!isset($_SESSION["username"])){
        header("location: login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <header>
            
        </header>
        <div class="content">
            <h2>Selamat Datang <?= $_SESSION["username"]; ?></h2>
        </div>
        <a href="logout.php"><button type="button">Logout</button></a>
    </div>

</body>
</html>