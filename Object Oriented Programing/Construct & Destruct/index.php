<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
        <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
            
        <form class=Laptop method="POSt">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Masukan Nama</label>
                <input type="text" name="pemilik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your Ngaran with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Merek laptop</label>
                <input type="text" name="merek" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>
    
    <!-- End Example Code -->
    <?php
    if (isset ($_POST['submit'])) {
        $laptop = new Laptop($_POST['pemilik'], $_POST['merek']);
        echo $laptop->hidupkan_laptop();   
    }

    //=================================================================================================================//

            class Laptop 
            {
                
                public                                                      //objek baru
                    $pemilik,
                    $merek;
                
                public function __construct($input_pemilik, $input_merek)   //Constructor adalah method khusus yang akan dieksekusi pada saat pembuatan objek (instance).
                {                                                           //Biasanya method ini digunakan untuk inisialisasi atau mempersiapkan data untuk objek.
                    echo "Ini berasal dari construct laptop<br>";           //Constructor parameter biasanya digunakan untuk initialize (menyiapkan) data untuk class.

                    $this->pemilik = $input_pemilik;                        //'this' merupakan variable khusus yang membantu kita mengambil properti atau method dari dalam kelas. 
                    $this->merek = $input_merek;
                }
                
                public function hidupkan_laptop()
                {
                    return "Laptop dengan merek $this->merek Yang dimiliki oleh $this->pemilik <br>";   //mengembalikan atau memberhentikan proses esek
                }
                
                public function __destruct()                                 //Destructor adalah method khusus yang akan dieksekusi saat objek dihapus dari memori.
                {
                    echo "Ini berasal dari destructor laptop<br>";
                }
            }

        //=================================================================================================================//
        ?>
</body>
</html>