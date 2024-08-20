<?php

    function hitungGaji($gol,$masaKerja){
        $gaji = 0;
        switch($gol):
            case "A":
                switch($masaKerja < 10):
                    case true: $gaji = 5_000_000;
                        break;
                    case false: $gaji = 7_000_000;
                        break;
                endswitch;
                break;
            case "B":
                switch($masaKerja < 10):
                    case true: $gaji = 6_000_000;
                        break;
                    case false: $gaji = 8_000_000;
                        break;
                endswitch;
                break;
            default: return "Golongan tidak tersedia!";
        endswitch;

        return $gaji;
    }
    $hasil = "";
    if(isset($_POST["kirim"])){
        if(intval($_POST["masakerja"]) < 0){
            $hasil = "Masa kerja tidak boleh minus";
        }else{
            $golongan = $_POST["golongan"];
            $masaKerja = $_POST["masakerja"];
            $hasil = hitungGaji($golongan, $masaKerja);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Karyawan</title>
</head>
<body>
    <form action="tugas3.php" method="post">
        <label for="golongan">Golongan : </label><input type="text" name="golongan" id="golongan" required placeholder="Golongan....." autocomplete="off">
        <br>
        <label for="masakerja">Masa Kerja : </label><input type="number" name="masakerja" id="masakerja" required placeholder="Masa Kerja.....">
        <br>
        <button type="submit" name="kirim">Kirim</button>
    </form>
    <textarea name="hasil" id="hasil"></textarea>
    <script>

        let result1 = document.getElementsByTagName("textarea")[0];
        result1.value = "<?= $hasil; ?>";
        let result2 = document.querySelectorAll("input");
        console.log(result2);
        for (let index = 0; index < result2.length; index++) {
            result2[index].addEventListener("input", function(){
                if(result2[index].value != ""){
                    result1.value = ""; 
                }
            })
            
        }

        
    </script>
</body>
</html>