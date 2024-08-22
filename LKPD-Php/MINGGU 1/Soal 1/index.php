<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<style>
    form button {
        margin-top: 10px;
    }
</style>

<body>
    <form action="" method="POST">
        <label for="input" name ="input"> Masukan teks :</label>
        <input type="text" name="input"> <br>

        <button type="submit" name="submit">Kirim teks</button>
    </form>
</body>



<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {        //memeriksa apakah form dikirimkan menggunakan metode POST. Jika ya, maka blok kode di dalamnya akan dieksekusi.

    $input = $_POST['input'];                      //membuat, mengambil, menyimpan nilai dari inputan form
    $angka = preg_replace('/\D/', '', $input);     //menghapus semua karakter yang bukan angka

    if ($angka) {
        echo "<p>Teks mengandung angka: " . implode(" dan ", str_split($angka)) . "</p>";   //membagi string angka menjadi array karakter individu
    } else {
        echo "<p>Teks tidak mengandung angka</p>";
    }
}

?>
</html>