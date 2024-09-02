<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        margin: auto;
        margin-top: 20vh;
        display: flex;
        justify-content: center;
    }

    .container {
        background-color: bisque;
        padding:30px;
        border-radius: 10px;
        color: brown;
        box-shadow: 20px 20px 60px #bebebe,
            -20px -20px 60px #ffffff;
    }

    form {
        background-color: cadetblue;
        padding: 40px;
        border-radius: 10px;
        color: white;
    }
    
    form input,
    button {
        border-radius: 5px;
        display: flex;

    }

    form button {
        margin-top: 10px;
    }
</style>

<body>
    <div class="container">
        <form method="POST">
            <label for="kalimat1">Kalimat pertama</label>
            <input type="text" name="kalimat1" id="kalimat1">
            <br>
            <label for="kalimat2">Kalimat kedua</label>
            <input type="text" name="kalimat2" id="kalimat2">
            <button type="submit">Submit</button>
        </form>
        <br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil input dari formulir
            $kalimat1 = isset($_POST['kalimat1']) ? $_POST['kalimat1'] : '';
            $kalimat2 = isset($_POST['kalimat2']) ? $_POST['kalimat2'] : '';

            // Menghitung jumlah karakter
            $selisih = strlen($kalimat1) - strlen($kalimat2);

            // Menampilkan hasil
            echo "Jumlah karakter kalimat pertama:" . strlen($kalimat1) . "<br>";
            echo "Jumlah karakter kalimat kedua:" . strlen($kalimat2) . "<br>";
            echo "Selisih dari kedua kalimat: $selisih <br>";
        }
        ?>
    </div>
</body>

</html>