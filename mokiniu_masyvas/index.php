<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mokiniai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

include 'data.php';

?>

<table class="styled-table">
    <thead>
    <tr>
        <th >Klase</th>
        <th >Kodas</th>
        <th >Vardas</th>
        <th >Pavarde</th>
        <th >Vidurkis</th>
        <th >Data</th>
    </tr>
    </thead>
    <?php foreach ($data as $key => $value):?>
        <?php foreach ($value as $key2 => $val):?>

    <tbody>
    <tr>
        <td><?=$key;?></td>
        <td><?=$key2;?></td>

            <?php foreach ($val as $v):?>
                <!-- check if value not array and display them           -->
                <?php if (!is_array($v)): ?>
                    <td><?=$v;?></td>
                <?php endif; ?>
                <!--  check if value is array and loop the value  -->
                <?php if (is_array($v) && !empty($v)): ?>
                    <td><?= round(array_sum($v) / count($v), 1); ?></td>
                <?php endif; ?>
            <?php endforeach;?>

    </tr>
        <?php endforeach;?>
    <?php endforeach;?>

</tbody>
</table>
</body>
</html>
