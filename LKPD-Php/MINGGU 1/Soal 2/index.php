<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kompensasi Pegawai</title>
</head>

<style>
    body {
        margin: auto;
        margin-top: 10vh;
        display: flex;
        justify-content: center;
    }

    .container {
        background-color: bisque;
        padding: 5%;
        border-radius: 10px;
        color: brown;
        box-shadow: 20px 20px 60px #bebebe,
            -20px -20px 60px #ffffff;
    }

    form {
        background-color: cadetblue;
        padding: 50px;
        border-radius: 10px;
        color: white;
    }

    form input,
    button {
        border-radius: 5px;
    }
</style>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="lamakerja">Lama Kerja (Jam):</label>
            <input type="number" name="lamakerja" id="lamakerja" min="1" required>
            <h6>Note : <b>Default jam kerja adalah 8 jam</b></h5>

                <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jamKerja = intval($_POST['lamakerja']);                //mengembalikan nilai integer suatu variabel menjadi bulat

            $kompensasi = 0;

            if ($jamKerja > 8) {
                $kompensasi = 50000 + ($jamKerja - 9) * 25000;      //kompensasi dasar, setiap lewat jam 9 
            }

            $jamlebih = $jamKerja - 8;

            echo "<p>Lama kerja Anda adalah " . $jamKerja . " jam</p>";
            echo "<p>Jam lebih adalah " . $jamlebih  . " jam</p>";
            echo "<p>Jumlah kompensasi adalah Rp " . number_format($kompensasi, 0, ',', '.') . "</p>";
        }
        ?>
    </div>
</body>

</html>