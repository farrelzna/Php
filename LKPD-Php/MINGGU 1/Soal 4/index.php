<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    p {
        text-align: center;
        font-weight: bold;
        font-size: 20px;
        color: brown;
    }
</style>

<body>
    <?php
    for ($i = 1 ; $i <= 2; $i++) {
        for ($j = 10; $j >= 1; $j--) { 
            $hasil = $i * $j;

            echo "<p>$i x $j = $hasil<br></p>";
        }
    }
    ?>
</body>

</html>