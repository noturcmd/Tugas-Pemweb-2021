<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <table border="1" cellpadding="10">
        <?php for ($i=1; $i < 5; $i++):?>
            <tr>
                <?php for ($j=1; $j < 6; $j++):?>
                    <td><?= "Element $i - $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>