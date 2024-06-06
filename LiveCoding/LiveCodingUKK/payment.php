<?php
session_start();    //mengaktifkan session

$total_belanja = 0;     //untuk total belanja
foreach ($_SESSION['pembelajaan'] as $b) {  //untuk menampilkan/mengecek array
    $total_belanja += $b['harga'] * $b['jumlah'];   //untuk total belanja
}

?>
<?php
if (isset($_POST['cash'])) {    // Jika tombol bayar diklik
    $uang = $_POST['bayar'];    // Mengambil uang yang dibayarkan
    $bayar = $uang - $total_belanja;    // Menghitung kembalian
    if ($bayar < 0) {   // Jika uang yang dibayarkan kurang maka akan
        echo
        '<div class="alert alert-danger position-absolute" role="alert" style="bottom: 0; right: 0;  margin-right: 10px;">
                Uang Kamu kurang!
            </div>';
    } else {    // Jika uang yang dibayarkan lebih
        $_SESSION['kembalian'] = $bayar;
        $_SESSION['bayar'] = $uang;
        header("Location: struke.php");
        exit(); // Mengarahkan ke halaman struke.php > berfungsi untuk membatalkan proses
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="display: flex; justify-content:center ; align-items: center;height: 100vh;overflow: hidden;">
    <div class="container">
        <form name="form1" class="box" method="post">
            <h1>Pembayaran</span></h1>
            <br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input type="number" name="bayar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" fdprocessedid="0lkiaa">
            </div>
            <br>
            <h5>Uang yang harus Anda bayarkan adalah :<br><br><?= "Rp." . number_format($total_belanja, 0, ',', '.'); ?></h5>
                <br>
            <button type="submit" value="Sign in" class="btn btn-primary" name="cash">Bayar</button>
            <br><br>
            <a href="index.php">Halaman awal</a>
        </form>
    </div>

</body>

</html>