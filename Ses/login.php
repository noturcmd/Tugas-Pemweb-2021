<?php

    session_start();
    if(isset($_SESSION["username"])){
        header("location: index.php");
        exit;
    }

    if(isset($_POST["submit"])){
        $username = "r";
        $password = "l";
        if($_POST["username"] === $username && $_POST["password"] === $password){
            $_SESSION["username"] = $username;
            header("location: index.php");
            exit;
        }
        $error = true;
        
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <?php if(isset($error)): ?>
            <h2>Username tidak ada di database</h2>
        <?php endif; ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td width="100"><label for="username">Username</label></td>
                    <td width="10">:</td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="3"><button type="submit" name="submit">Login</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>