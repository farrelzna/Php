<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $data = [80, 90, 75, 100, 85, 100, 66];
    $cari = 100;

    // Menghitung jumlah item duplikat 
    $frekuensi = array_count_values(array_merge($data));

    // Pisahkan nilai yang duplikat dan unik
    $duplikat = [];

    foreach ($frekuensi as $nilai => $jumlah) {
        if ($jumlah > 1) {
            $duplikat[$nilai] = $jumlah;
        }
    }

    // Tampilkan hasil
    echo "Nilai-nilai yang sama:<br>";
    foreach ($duplikat as $nilai => $jumlah) {
        echo "Nilai: $nilai, Jumlah: $jumlah<br>";
    }
    ?>
</body>

</html>