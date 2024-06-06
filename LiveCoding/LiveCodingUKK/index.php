<?php
require("logic/logic.php"); //memanggil file logic
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>MASUKAN DATA</h1>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Barang</label>
                <input type="text" name="barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" fdprocessedid="0lkiaa">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" fdprocessedid="0lkiaa">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" fdprocessedid="0lkiaa">
            </div>
            <button type="submit" name="tambah" class="btn btn-primary" fdprocessedid="2kthds">Tambah</button>

        </form>
    </div>
    <br><br>
    <div class="container">
        <div class="section1">
            <h1>list barang</h1>
            <br>
            <div class="section2">
                <table class="table" border="1" cellpadding="6" cellspacing="6">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php
                    $i = 1; //untuk nomor baris
                    $total_belanja = 0; //untuk total belanja
                    $item_exists = false;   //untuk menentukan apakah item yang sudah ada
                    foreach ($_SESSION['pembelajaan'] as $belan => $b) : //untuk menampilkan array
                        $total_belanja += $b['harga'] * $b['jumlah']; //untuk total belanja
                    ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <th><?= htmlspecialchars($b['barang']) ?></th> 
                            <!-- untuk menampilkan array barang - htmlspecialchars > pengubahan tag -->
                            <th><?= "Rp." . number_format($b['harga'], 0, ',', '.') ?></th> 
                            <!-- untuk menampilkan array harga - number_format> format angka -->
                            <th><?= htmlspecialchars($b['jumlah']) ?></th>
                            <!-- untuk menampilkan array jumlah - htmlspecialchars > pengubahan tag -->
                            <th><?= number_format($b['harga'] * $b['jumlah'], 0, ',', '.') ?></th> 
                            <!-- untuk menampilkan array total -->
                            <th cellpadding="5">
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="hapus_key" value="<?= $belan ?>">
                                    <button class="btn btn-danger" type="submit" name="hapus">Remove</button>
                                </form>
                            </th>
                        </tr>
                    <?php $i++;endforeach; ?>
                    <!-- pemberhentian -->
                    <tr>
                        <td colspan="5"> Total Barang</td>
                        <td><?= count($_SESSION['pembelajaan']) ?></td>
                        <!-- menghitung > menampilkan output -->
                    </tr>
                    <tr>    
                        <td colspan="5">Total Belanja</td>
                        <!-- menampilkan output -->
                        <td><?= "Rp." . number_format($total_belanja, 0, ',', '.') ?></td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <form action="" method="post">
                                <button class="btn btn-danger" type="submit" name="bayar" id="bayar" method="post">Pay</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
</body>

</html>