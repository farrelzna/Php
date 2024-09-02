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

    form input, button{
        border-radius: 5px;
    }
</style>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="input" name="input"> Masukan teks :</label>
            <input type="text" name="input"> <br>

            <button type="submit" name="submit">Kirim teks</button>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {        //memeriksa apakah form dikirimkan menggunakan metode POST. Jika ya, maka blok kode di dalamnya akan dieksekusi.

            $input = $_POST['input'];                      //membuat, mengambil, menyimpan nilai dari inputan form
            $angka = preg_replace('/\D/', '', $input);     //menghapus semua karakter yang bukan angka

            if ($angka) {
                echo "<p>Teks mengandung angka: " . implode(", ", str_split($angka)) . "</p>";   //membagi string angka menjadi array karakter individu, argumen satu untuk menentukan value, 
            } else {
                echo "<p>Teks tidak mengandung angka</p>";
            }
        }

        ?>
    </div>
</body>




</html>