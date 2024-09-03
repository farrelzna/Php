<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Uang</title>
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
        padding: 5px;
    }
</style>

<body>
    <div class="container">
        <form method="POST">
            <label for="jumlah">Jumlah Uang:</label>
            <input type="number" name="jumlah" id="jumlah" step="0.01" min="0">
            <button type="submit">Konversi</button>
        </form>
        <br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlah = floatval($_POST['jumlah']);   //mengubah data menjadi tipe data float
            $pecahan = [100000, 50000, 20000, 10000, 5000, 3000, 1000, 500, 100, 50, 30, 10];

            echo "Jumlah uang: Rp " . number_format($jumlah, 2, ',', '.') . "<br>"; //format angka

            foreach ($pecahan as $nilai) {
                if ($jumlah >= $nilai) {
                    $jumlahPecahan = intval($jumlah / $nilai);  //memastikan hasilnya adalah integer
                    $jumlah -= $jumlahPecahan * $nilai;
                    echo "Rp " . number_format($nilai, 0, ',', '.') . " = " . $jumlahPecahan . "<br>";
                }
            }
        }
        ?>
    </div>
</body>

</html>