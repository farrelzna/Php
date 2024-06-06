<?php
session_start();    //mengaktifkan session

$total_belanja = 0; //untuk total belanja
foreach ($_SESSION['pembelajaan'] as $belan => $b) {    //untuk menampilkan/mengecek array
    $total_belanja += $b['harga'] * $b['jumlah'];   //untuk total belanja
    $bayar = $_SESSION['bayar'] - $total_belanja;   //untuk kembalian
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struke</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    </style>
</head>

<body>
    <div class="container">
        <div class="section1">
            <div class="tools">
            </div>
            <div class="wrap">
                <h4>Bukti Pembayaran</h4>
                <div class="rand">
                    <h4>No.Transaksi #<br><?= uniqid() ?></h4>
                </div>
                <div class="Date">
                    <h4>Date #<br><?= date("l jS \of F Y") ?></h4>
                </div>
            </div>
            <div class="section1">
                <table class="table" border="1" cellpadding="6" cellspacing="6">
                    <tr>
                        <th scope="col">Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                    </tr>
                    <?php
                    $i = 1;
                    $total_belanja = 0;
                    $item_exists = false;
                    foreach ($_SESSION['pembelajaan'] as $belan => $b) :    //untuk mengecek array dan menarik data
                        $total_belanja += $b['harga'] * $b['jumlah'];   //untuk total belanja
                    ?>
                        <tr>
                            <td><?= $b['barang'] ?></td>
                            <td><?= $b['jumlah'] ?></td>
                            <td><?= $b['harga'] ?></td>
                        </tr>
                        <br>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <br>
        <div class="section2">
            <div class="total">
                <p>Total</p>
                <p>Rp. <?= number_format($total_belanja, 2, ',', '.') ?></p>
                <p>Uang Yang Dibayar</p>
                <div class="bayar">
                    <p> Rp. <?= number_format($_SESSION['bayar'] , 0, ',', '.')?></p>
                </div>
                <p>Kembalian</p>
                <p> Rp. <?= $bayar ?></p>
                <br>
                <a href="index.php" onclick="return confirm('Apakah kamu ingin kembali ke halaman utama?')">Halaman Utama</a>
                <br>
            </div>
        </div>
</body>

</html>