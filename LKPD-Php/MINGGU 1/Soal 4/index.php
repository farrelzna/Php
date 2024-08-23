<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Cari Angka Yang Sama</h2>
    <?php

    $data = [80, 90, 75, 100, 85, 100, 66];
    $cari = 100;
    function cari_angka($data, $cari)
    {
        $jumlah = 0;
        foreach ($data as $nilai) {
            if ($nilai == $cari) {
                $jumlah++;
            }
        }
        echo "Jumlah Angka $cari = $jumlah";
    }

    cari_angka($data, $cari);
    ?>
</body>

</html>