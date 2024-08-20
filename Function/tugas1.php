<?php

    function buatBintang(int $baris){
        for ($i=1; $i <= $baris; $i++) {
            echo "<h2>";
            for ($j=1; $j <= $i; $j++) { 
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
</body>
</html>