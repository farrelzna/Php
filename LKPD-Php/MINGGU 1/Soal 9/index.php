<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Uang</title>
</head>

<body>
    <form method="POST">
        <label for="jumlah">Jumlah Uang:</label>
        <input type="number" name="jumlah" id="jumlah" step="0.01" min="0">
        <button type="submit">Konversi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = floatval($_POST['jumlah']);
        $pecahan = [100000, 50000, 20000, 10000, 5000, 3000, 1000, 500, 100];

        echo "Jumlah uang: Rp " . number_format($jumlah, 2, ',', '.') . "<br>";

        foreach ($pecahan as $nilai) {
            if ($jumlah >= $nilai) {
                $jumlahPecahan = intval($jumlah / $nilai);
                $jumlah -= $jumlahPecahan * $nilai;
                echo "Rp " . number_format($nilai, 0, ',', '.') . "<br>";
            }
        }
    }
    ?>
</body>

</html>
