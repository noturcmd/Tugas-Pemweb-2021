<?php

session_start();
require "../template/header.php";
if(!isset($_SESSION["nama-pengunjung"])){
    $pesan = "ANDA TIDAK DIIZINKAN MASUK!";
}else{
    if($_SESSION["ruang"] !== "Ruang 3"){
        $pesan = "Maaf ini bukan ruangan untuk Anda!";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bioskop | PTIK UNS</title>
    <link rel="stylesheet" href="../style/style1.css">
    <link rel="stylesheet" href="../style/style3.css">
</head>
<body>
<div class="container">
    <?= cekDirektori(dirname(__FILE__), explode(".php", basename(__FILE__))[0]);?>
    <div class="content">
        <h1>Ruangan Bioskop 1</h1>
        <?php if(isset($pesan)):?>
            <h1><?= $pesan ?></h1>
        <?php else:?>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/M_ov3-HF-XM?si=VP2lOGoF0DWlNOlx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <?php endif;?>
    </div>
</div>
</body>
</html>