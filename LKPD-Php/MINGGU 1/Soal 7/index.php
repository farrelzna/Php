<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="kalimat1">Kalimat pertama:</label>
        <input type="text" name="kalimat1" id="kalimat1">
        <br>
        <label for="kalimat2">Kalimat kedua:</label>
        <input type="text" name="kalimat2" id="kalimat2">
        <br>
        <button type="submit">Submit</button>
        <br><br>
    </form>

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
</body>

</html>
