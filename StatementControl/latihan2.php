<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .genap{
            color: red;
        }
    </style>
</head>
<body>
    <?php for ($i=1; $i < 7; $i++):
        if($i % 2 == 0):
            echo "<h$i class=\"genap\">Mahasiswa $i</h$i>";
        else:
            echo "<h$i>Mahasiswa $i</h$i>";
        endif;
    endfor;
    ?>
</body>
</html>