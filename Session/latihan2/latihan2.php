<?php 

    if(isset($_POST["submit"])){
        require "format-web.php";
    }

?>
<!doctype html>
<html lang="en">

<head>
    <title>Bermain dengan Tema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    :root {
        --font_size: <?=$_COOKIE["font-size"]?>;
        --background_color: <?=$_COOKIE["background-color"]?>;
    }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="format-web.php">
            <h3>SETTING</h3>
            <div>Background</div>
            <select name="background_color">
                <?php  
                        $colors = array(
                            '#4e79a0' => 'Biru', 
                            '#75b14a' => 'Hijau', 
                            '#d06353' => 'Merah');
                        
                        foreach ($colors as $name => $value) { 
                            $selected = $name == $_POST['background_color'] ? 'SELECTED="SELECTED"' : ''; 
                            echo '<option value="'.$name.'"'.$selected.'>'.$value.'</option>'; 
                        } 
                    ?>
            </select>
            <div>Font Size</div>
            <select name="font_size">
                <?php  
                    $font_sizes = array('15px', '17px', '20px', '25px');
                    
                    foreach ($font_sizes as $value) { 
                        $selected = $value == $_POST['font_size'] ? 'SELECTED="SELECTED"' : ''; 
                        echo '<option value="'.$value.'"'.$selected.'>'.$value.'</option>'; 
                    } 
                ?>
            </select>
            <div class="remember">
                <input type="checkbox" id="remember" name="remember" />
                <label for="remember"> Remember</label>
            </div>
            <div class="tombol">
                <input type="submit" class="button blue" name="submit" value="Simpan" onclick='alert("Cookie berhasil disimpan!")'/>
                <input type="submit" class="button red" name="hapus_cookie" value="Hapus Cookie" onclick='alert("Cookie berhasil dihapus!")'/>
            </div>
        </form>
    </div>
</body>

</html>