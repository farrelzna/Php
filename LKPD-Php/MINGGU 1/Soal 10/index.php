<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $list_usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

    $jumlah_anak = count(array_filter($list_usia, fn($usia) => $usia < 17));
    $jumlah_dewasa = count(array_filter($list_usia, fn($usia) => $usia >= 17));

    echo "List usia: " . implode(", ", $list_usia) . "<br>";
    echo "Jumlah anak-anak: $jumlah_anak<br>";
    echo "Jumlah dewasa: $jumlah_dewasa<br>";
    ?>
</body>

</html>