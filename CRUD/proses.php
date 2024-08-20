<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data User</title>
</head>
<body>
    <form action="index.php" method="post" name="form-login">
        <fieldset>
            <legend>Biodata</legend>
            <label for="username">Username : </label><input type="text" name="username" id="username"><br>
            <label for="password">Password : </label><input type="password" name="password" id="password"><br>
        </fieldset>
        <button type="submit">Login</button>
    </form>
</body>
</html>