<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>
<style>
    a {
        text-decoration: none;
        color: white;
    }
</style>
<body>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h1>DATA SISWA</h1>
                        <form action="" method="POST" class="row d-flex align-items-center">
                            <label for="nama">Nama Siswa</label>
                            <input type="text" id="nama" placeholder="masukan nama siswa" name="nama">

                            <label for="nis">NIS Siswa</label>
                            <input type="number" id="nis" placeholder="masukan nis siswa" name="nis">

                            <label for="rayon">Rayon</label>
                            <input type="text" id="rayon" placeholder="masukan rayon siswa" name="rayon">

                            <div class="col mt-3">
                                <button class="btn btn-primary" type="submit" name="kirim">
                                    <i class='bx bx-plus'></i>Tambah</button>
                                <button class="btn btn-danger" type="submit" name="cetak">
                                    <i class='bx bx-printer'></i>print</button>
                                <button class="btn btn-secondary" type="submit" name="cetak">
                                    <a href="destroy.php">Reset</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php
        session_start();

        // initialize an based Array if the arrays is not initialized yet
        if (!isset($_SESSION['dataSiswa'])) {
            $_SESSION['dataSiswa'] = array();
        }

        if (isset($_POST["kirim"])) {
            if ($_POST['nama'] == "" && $_POST['nis'] == "" && $_POST['rayon'] == "") {
                echo "data kosong <br>";
            } else {
                $siswa = array(
                    "nama" => $_POST['nama'],
                    "nis" => $_POST['nis'],
                    "rayon" => $_POST['rayon']
                );

                array_push($_SESSION['dataSiswa'], $siswa);
            }
        }

        if (!empty($_SESSION['dataSiswa'])) {
            foreach ($_SESSION['dataSiswa'] as $key => $value) {
                echo $value["nama"] . " ";
                echo $value["nis"] . " ";
                echo $value["rayon"] . "";
                echo "<a href='?hapus=".$key. "' class=\"btn btn-danger ms-2\">Hapus</a>";
                echo "<br>";
            }
        }

        if (isset($_GET['hapus'])) {
                $key = $_GET['hapus'];
                unset($_SESSION['dataSiswa'][$key]);

                header('location: ' . $_SERVER['PHP_SELF']);
                exit;
        }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
