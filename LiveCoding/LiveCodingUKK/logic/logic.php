<?php

session_start();    //mengaktifkan session

if (!isset($_SESSION['pembelajaan'])) {   //untuk mengecek array dan menarik data
    $_SESSION['pembelajaan'] = array();
}

if (isset($_POST['tambah'])) {    // Jika tombol tambah diklik
    $barang = $_POST['barang'];     // Mengambil data
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;
    if ($barang == "" && $harga == "" &&  $jumlah == "") {     //untuk mengecek array dan menarik data
        echo "belajaan kosong";
    } else {
        $nemu = false;
        foreach ($_SESSION['pembelajaan'] as &$item) {    //untuk mengecek array dan menarik data
            if ($item['barang'] === $barang) {
                $item['jumlah'] += $jumlah;
                $nemu = true;
                break;
            }
        }
    }

    if (!$nemu) {     //note: $nemu == false kebalikan
        $belajaan = array(
            'barang' => $barang,
            'harga' => $harga,
            'jumlah' => $jumlah
        );
        array_push($_SESSION['pembelajaan'], $belajaan);
    }
}

if (isset($_POST['hapus'])) {
    if (isset($_POST['hapus_key'])) {
        $belan = $_POST['hapus_key']; // Mengambil kunci dari form
        unset($_SESSION['pembelajaan'][$belan]); // Menghapus data sesuai kunci
        header('Location: index.php' . $_SERVER['PHP_SELF']); // Redirect kembali ke halaman ini setelah penghapusan
        exit();
    }
}

if (isset($_POST['bayar'])) {
    if (empty($_SESSION['pembelajaan'])) {
        echo "Isi dulu belanjaan baru bayar";
    } else {
        header("Location: payment.php");
        exit();
    }
}

//build in = bawaan 
//eksternal