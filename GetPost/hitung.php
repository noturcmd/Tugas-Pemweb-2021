<?php


    if(!isset($_POST["bil1"]) || !isset($_POST["bil2"]) || $_POST["operasi"] == "Pilih operator"){
        header("Location: tugas1.php");
        exit;
    }else{
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        $operasi = $_POST["operasi"];
        if($operasi == "x"){
            $operasi = "*";
        }
        eval("echo $bil1 $operasi $bil2;");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    
</body>
</html>