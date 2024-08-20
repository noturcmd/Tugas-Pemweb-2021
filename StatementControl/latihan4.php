<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
    <style>
        .red-font{
            color: red;
        }
        .red-bg{
            background-color: red;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10">
        <?php for ($i=1; $i < 5; $i++):?>
            <tr>
                <?php for ($j=1; $j < 6; $j++):?>
                    <?php if(($i + $j) % 2 == 0): ?>
                        <td class="red-bg"><?= "Element $i - $j"; ?></td>
                    <?php else: ?>
                        <td class="red-font"><?= "Element $i - $j"; ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>