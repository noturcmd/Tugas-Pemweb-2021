<?php

    function buatBintang(int $baris){
        for ($i=1; $i <= $baris; $i++) {
            echo "<h2>";
            for ($j=$baris; $j >= $i; $j--) { 
                echo "*";
            }
            echo "</h2>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Bintang</title>
</head>
<body>
    <h1>Bintang 4 baris</h1>
    <?php buatBintang(4)?>
    <hr>
    <h1>Bintang 5 baris</h1>
    <?php buatBintang(5)?>
    <br>
    <br>
    <h2><?= basename(__FILE__) ?></h2>
    <h2><?= $_SERVER["SCRIPT_FILENAME"] ?></h2>
    <h2><?= var_dump(explode(basename(__FILE__), $_SERVER["SCRIPT_FILENAME"])) ?></h2>
</body>
</html>