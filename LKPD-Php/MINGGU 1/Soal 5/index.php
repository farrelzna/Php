<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    // $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    // // Gabungkan dan hitung frekuensi setiap elemen
    // $frekuensi = array_count_values(array_merge($bil1, $bil2));

    // // Pisahkan nilai yang duplikat dan unik
    // $duplikat = [];
    // $unik = [];

    // foreach ($frekuensi as $nilai => $jumlah) {
    //     if ($jumlah > 1) {
    //         $duplikat[$nilai] = $jumlah;
    //     } else {
    //         $unik[] = $nilai;
    //     }
    // }

    // // Tampilkan hasil
    // echo "Nilai-nilai yang sama:<br>";
    // foreach ($duplikat as $nilai => $jumlah) {
    //     echo "Nilai: $nilai, Jumlah: $jumlah<br>";
    // }

    // echo "<br>Nilai-nilai yang tidak sama:<br>";
    // foreach ($unik as $nilai) {
    //     echo "Nilai: $nilai<br>";
    // }

    

    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    // Menghitung bilangan yang ada di kedua array
    $duplikat = array_intersect($bil1, $bil2);

    // Menghitung bilangan yang tidak ada di kedua array
    $unik = array_diff($bil1, $duplikat);

    // Mengubah array hasil ke string dengan format yang diinginkan
    $duplikatString = implode(',', $duplikat);
    $unikString = implode(',', $unik);

    echo "<span class='color'>Bilangan yg ada di kedua variabel:</span>\n";
    echo $duplikatString . "\n" . "<br>";

    echo "<span class='color'> Bilangan yg tidak ada di kedua variabel:</span>\n";
    echo $unikString . "\n";


    ?>
</body>

</html>