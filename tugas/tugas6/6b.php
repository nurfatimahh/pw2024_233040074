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
            background-color: orange;
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
            background-color: blue;
            border: 0.5px solid black;
            justify-content: center;
            align-items: center;
            margin: 3px;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="angka"> Masukkan Angka ; </label>
        <input type="text" name="angka" id="angka">
        <button type="submit">Tampilkan button </button>
    </form>
    <?php if (isset($_POST["angka"])) : ?>
        <?php 
        for ($i = $_POST["angka"]; $i>= 1; $i--) {
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