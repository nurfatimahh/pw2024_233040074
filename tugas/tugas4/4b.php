<?php
$perangkatkeras = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b</title>
</head>
<body>
    <h3>Macam-macam Perangkat Keras Komputer</h3>
    <ol>
        <?php foreach($perangkatkeras as $pk) : ?>
            <li><?php  echo $pk; ?></li>
        <?php endforeach ?>
    </ol>

    <h3>Macam-macam Perangkat Keras Komputer Baru</h3>
    <ol>
        <?php array_push($perangkatkeras, "Card Reader", "Modem");
        sort($perangkatkeras)?>

        <?php foreach($perangkatkeras as $pk) :?>
            <li><?php  echo $pk; ?></li>
        <?php endforeach?>  
    </ol>
</body>

</html>