<?php 
    if(!isset($_POST["username"]) || !isset($_POST["password"])){
        header("location: proses.php");
        exit;
    }

    if(empty($_POST["username"]) || empty($_POST["password"])){
        echo <<<ALERT
        <script>
        alert("Username atau Password tidak boleh kosong!")
        document.location = "proses.php";
        </script>";
        ALERT;
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
</head>
<body>
    <div class="container">
        <header>
        <?php
            date_default_timezone_set('Asia/Jakarta');
            $waktu = date('H');
            if(in_array(intval($waktu), range(5, 10))){
                $waktu = "Pagi";
            }else if(in_array(intval($waktu), range(11, 14))){
                $waktu = "Siang";
            }else if(in_array(intval($waktu), range(15, 17))){
                $waktu = "Sore";
            }else{
                $waktu = "Malam";
            }
        ?>
            <h1><?php echo "Selamat {$waktu}, {$_POST["username"]}";?></h1>
            <nav>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </nav>
        </header>
    </div>
</body>
</html>