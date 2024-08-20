<?php
    include_once("koneksi.php");

    // Check if form is submitted
    if(empty($_POST['nama']) || empty($_POST['nim']) || empty($_POST['jurusan'])){
        header("location: index.php");
        exit;
    }

    // Insert data into the database
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $inputMhs = query("INSERT INTO user (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')");

    $selectUser = query("select * from user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang, <?= $_POST['nama'] ;?></h1>
    <table>

        <?php $index = 0;?>
        <?php while($row = mysqli_fetch_array($selectUser)): ?>
            <?php if($index > 3): break;?>
            <?php else: ?>
                <tr>
                    <td><?= $row[$index]; ?></td>
                </tr>
            <?php endif; ?>
            
            <?php $index++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
