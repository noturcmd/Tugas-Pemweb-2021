<?php

    $paragraf1 = "Hello, my name is Eleanor. I am 13 years old. 
    Everyone has a family and I have also. I love my family very 
    much. I live with my family. Today I will share something about 
    my family. There are 4 people in total in our family. My parents, 
    my sister, and me. We are a very small family."; 

    $paragraf2 = "My father is an engineer and my mother is a doctor, 
    but after their work, they spend so much time with us. They both 
    love us a lot. They work really hard to make our future better. 
    It is a very happy family. If we face any bad time, my parents 
    handle it with care.";

    $story = $paragraf1 . $paragraf2;
    $jumlahKata = count(explode(" ",$story));
    $story = $paragraf1 . " " . $paragraf2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <p style="text-align: justify; width: 400px; margin:auto;"><?= $story ?></p>
    <br><br>
    <p style="text-align: justify; width: 400px; margin:auto;"><?= str_replace(["13", "4"], ["thirteen", "four"], $story) ?></p>
    <br><br>
    <p style="text-align: justify; width: 400px; margin:auto;"><?= "Jumlah karakter : " . strlen($story) - 1 ?></p>
    <br><br>
    <p style="text-align: justify; width: 400px; margin:auto;"><?= "Jumlah Kata : " . $jumlahKata ?></p>
</body>
</html>