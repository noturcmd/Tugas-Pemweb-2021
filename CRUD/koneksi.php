<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ptikuns";
    
    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn){
        die("Koneksi gagal " . mysqli_connect_error());
    }

    $query = "SELECT * FROM user WHERE kelas = \"B\"";
    $setQuery = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($setQuery);
    $pages = ceil(count($result) / 10);
    
    $awal = isset($_GET["nomor"]) ? intval($_GET["nomor"]) * 10 - 10 : 1;
    $akhir = 10;
    $nomor = $awal + 1;
    
    $query = "SELECT * FROM user WHERE kelas = \"B\" LIMIT $awal, $akhir";
    $setQuery = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($setQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa PTIK | 2022</title>
    <style>
        table {
            
            border-collapse: collapse;
            margin: auto;
        }

        table{
            width: 600px;
        }

        table tr td, table tr th{
            text-align: center;
        }

        table tr td:nth-child(3){
            text-align: start;
        }

        table tr td:nth-child(1){
            width: 20px;
        }

        main ul {
            text-align: center;
        }

        main ul li {
            font-size: 20px;
            display: inline-block;
            margin-right: 10px;
        }
        
        ul li a{
            padding: 5px;
            text-decoration: none;
            color: black;
            
        }
        
        main ul li a:hover{
            color: white;
            background-color: gray;
        }
        
        .active{
            padding: 5px;
            background-color: gray;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h2>Coding Kidding</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </header>
        <main>
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>NIM</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <?php foreach($result as $dataMHS): ?>
                    <tr>
                        <td><?= "{$nomor}. "; ?></td>
                        <td><?= "{$dataMHS[1]}"; ?></td>
                        <td><?= ucwords(strtolower($dataMHS[2])); ?></td>
                    </tr>
                    <?php ++$nomor; ?>
                    <?php endforeach;?>
                </table>
                <ul>
                    <?php for ($i=0; $i < $pages; $i++) : ?>
                        <?php if($i + 1 == $_GET["nomor"]):?>
                            <li><a href="?nomor=<?= $i + 1;?>" class="active"><?= $i + 1;?></a></li>
                            <?php else:?>
                                <li><a href="?nomor=<?= $i + 1;?>"><?= $i + 1;?></a></li>
                        <?php endif;?>
                    <?php endfor;?>
                </ul>
            </main>
        </div>
        
    </body>
    </html>