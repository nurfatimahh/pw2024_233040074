<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 6a</title>
    <style>
        .box1 {
            display: inline-flex;
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 0.5px solid black;
            justify-content: center;
            align-items: center;
            margin: 3px;
            font-size: 25px;
        }
        .box2 {
            display: inline-flex;
            width: 50px;
            height: 50px;
            background-color: plum;
            border: 0.5px solid black;
            justify-content: center;
            align-items: center;
            margin: 3px;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <?php if (isset($_GET["angka"])) : ?>
        <?php 
        for ($i = $_GET["angka"]; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo '<div class= "box1">' . $i . '</div>';
                } else 
                    echo '<div class= "box2">' . $i . '</div>';
            }
            echo "<br>";
        }
        ?>
    <?php endif; ?>
</body>
</html>