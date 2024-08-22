<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kompensasi Pegawai</title>
</head>

<body>
    <form action="" method="POST">
        <label for="lamakerja">Lama Kerja (Jam):</label>
        <input type="number" name="lamakerja" id="lamakerja" min="1" required>
        <h6>Note : <b>Default jam kerja adalah 8 jam</b></h5>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamKerja = intval($_POST['lamakerja']);

        $kompensasi = 0;

        if ($jamKerja > 8) {
            $kompensasi = 50000 + ($jamKerja - 9) * 25000;
        }

        $jamlebih = $jamKerja - 8;

        echo "<p>Lama kerja Anda adalah " . $jamKerja . " jam</p>";
        echo "<p>Jam lebih adalah " .$jamlebih  . " jam</p>";
        echo "<p>Jumlah kompensasi adalah Rp " . number_format($kompensasi, 0, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
