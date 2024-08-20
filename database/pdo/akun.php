<?php

    include "koneksi.php";
    $query = "SELECT * FROM user ORDER BY id_user DESC";
    $result = $koneksi->query($query);

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <title>Halaman Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- Navigasi -->
    <?php include "header.php";?>

    <!-- End Navigasi -->

    <!-- Tabel -->
    <div class="row">
    <div class="col-lg-6 offset-lg-3 mt-3">
        <div class="card">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Waktu Pembuatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    <?php foreach($result as $value):?>
                        <?php ++$no;?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $value["username"]; ?></td>
                            <td><?= $value["password"]; ?></td>
                            <td><?= $value["created_at"]; ?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>


    <!-- End Tabel -->
    <?php include "footer.php";?>
</body>
</html>

<?php $koneksi = null;?>
