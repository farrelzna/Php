<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $students = [
        [
            'nama' => 'andi',
            'nilai' => [80, 78, 82, 78, 88],
        ],
        [
            'nama' => 'budi',
            'nilai' => [86, 70, 80, 85, 81],
        ],
        [
            'nama' => 'ahmad',
            'nilai' => [83, 91, 70, 73, 81],
        ],
        [
            'nama' => 'joni',
            'nilai' => [89, 85, 84, 86, 88],
        ],
    ];

    foreach ($students as $student) {
        $totalNilai = array_sum($student['nilai']); // Menghitung total nilai
        $jumlahNilai = count($student['nilai']);    // Menghitung jumlah nilai
        $rataRata = $totalNilai / $jumlahNilai;     // Menghitung rata-rata
        
        echo "Nama: " . $student['nama'] . "<br>";
        echo "Rata-rata nilai: " . number_format($rataRata, 2) . "<br><br>";
    }
    ?>

</body>

</html>