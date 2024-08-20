<?php 

    session_start();
    require "template/header.php";

    
    if(isset($_POST["hapus-tiket"])){
        $_SESSION = [];
        session_unset();
        session_destroy();
        $disabled = false;
        $status = "Belum membeli tiket";
    }

    if(isset($_POST["submit"])){
        $_SESSION["nama-pengunjung"] = $_POST["nama-pengunjung"];
        $_SESSION["ruang"] = $_POST["ruang"];
        $status = "Sudah membeli tiket atas nama {$_SESSION["nama-pengunjung"]} di {$_SESSION["ruang"]}";
        $disabled = true;
    }else{
        $status = "Belum membeli tiket";
        $disabled = false;
    }
    
    
    if(isset($_SESSION["nama-pengunjung"])){
        $status = "Sudah membeli tiket atas nama {$_SESSION["nama-pengunjung"]} di {$_SESSION["ruang"]}";
        $disabled = true;

    }
    $disabled = $disabled ? "disabled" : "enabled";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bioskop | PTIK UNS</title>
    <link rel="stylesheet" href="style/style1.css">
    <link rel="stylesheet" href="style/style2.css">
</head>
<body>
    <div class="container">
        <?= cekDirektori(dirname(__FILE__), explode(".php", basename(__FILE__))[0]);?>
    </div>
    <div class="content">
        <h1>Halaman Lobby</h1>
        <p>Status Pengunjung : <?= $status?></p>
        <hr>
        <form action="" method="post">
            <ul>
                <li><label for="nama-pengunjung">Nama : <input type="text" name="nama-pengunjung" id="nama-pengunjung" placeholder="nama..." required <?= $disabled ?>></label></li>
                <li>
                    <label for="ruang">Ruang : </label>
                    <input type="radio" name="ruang" id="ruang" value="Ruang 1" required <?= $disabled ?>>Ruang 1
                    <input type="radio" name="ruang" id="ruang" value="Ruang 2" required <?= $disabled ?>>Ruang 2
                    <input type="radio" name="ruang" id="ruang" value="Ruang 3" required <?= $disabled ?>>Ruang 3
                </li>
                <li><button type="submit" name="submit" <?= $disabled ?> >Beli Tiket</button> <button type="submit" name="hapus-tiket" <?= $disabled = $status == "Belum membeli tiket" ? "disabled" : "enabled"; ?> >Hapus Tiket</button></li>
            </ul>
        </form>
    </div>
</body>
</html>