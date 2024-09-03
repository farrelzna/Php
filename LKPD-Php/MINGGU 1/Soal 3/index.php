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
    for ($i = 1; $i <= 11; $i += 2) {
        $hasil = 5 * $i;
        echo "<p>Nilai dari $i x 5 = $hasil</p><br>";
    }
    ?>
</body>

</html>