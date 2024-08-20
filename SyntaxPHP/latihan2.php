<?php

 $mahasiswa = [
    "nama" => ["Sulis","Rendi","Jatmiko","Feri"],
    "nim" => ["K3510001","K3510002","K3510003","K3510004"],
    "asal" => ["Solo","Klaten","Boyolali","Wonogiri"],
    "jurusan" => ["RPL","TKJ","Multimedia","RPL"]
 ]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <?php for ($i=0; $i < count($mahasiswa); $i++):?>
        <ul>
            <li><?= $mahasiswa["nama"][$i];?></li>
            <li><?= $mahasiswa["nim"][$i];?></li>
            <li><?= $mahasiswa["asal"][$i];?></li>
            <li><?= $mahasiswa["jurusan"][$i];?></li>
        </ul>
    <?php endfor; ?>
</body>
</html>