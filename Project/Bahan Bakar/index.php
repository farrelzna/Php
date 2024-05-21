<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bahan Bakar</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="container">
            <div class="section1">
                <div class="wrap">
                    <img src="asset/shell.png" alt="Logo">
                    <h2>Powered by <span>Shell</span></h2>
                </div> 
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <label for="tipe">Jenis Bahan Bakar</label>
                    <select id="tipe" name="tipe" required>
                        <option value="Shell Super">Shell Super</option>
                        <option value="Shell V-Power">Shell V-Power</option>
                        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                    </select>   
                        <br><br>
                    <label for="jumlah">Jumlah Liter</label>
                    <input type="number" id="jumlah" name="jumlah" min="0" step="1" required>
                        <br><br>
                    <label for="metode pembayaran">Metode Pembayaran</label>
                    <select id="Metode Pembayaran" name="Metode Pembayaran" required>
                        <option value="Tunai">Tunai</option>
                        <option value="Non Tunai" >Visa</option>
                        <option value="Non Tunai" >MasterCard</option>
                        <option value="Non Tunai" >AmericanExpress</option>
                        <option value="Non Tunai" >DiscoverNetworks</option>
                        <option value="Non Tunai" >Dana</option>
                        <option value="Non Tunai" >Gopay</option>
                        <option value="Non Tunai" >Bri</option>
                        <option value="Non Tunai" >Bca</option>
                        <option value="Non Tunai" >ShopeePay</option>
                        <option value="Non Tunai" >Uang Slot</option>
                    </select>
                        <br><br><br>
                    <div class="wrap2">
                        <button onclick="Hide()" id="kirim" class="button-82-pushable" type="submit">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">Beli
                        </button>  
                        <button onclick="" id="kirim" class="button-82-pushable" type="submit">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">Riwayat
                        </button>  
                    </div>
                    <div class="Payment" id="Payment" style="display:none;">
                        <h3 class="h3">Metode Pembayaran :</h3>
                        <img class="img1" id="move2" src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_SbyPP_mc_vs_dc_ae.jpg" alt="Payment"> 
                    </div>    
                </form>
            </div>
            <div class="section2">

                <?php
                    $currentDate = date('l, F j, Y');
                    

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        class BahanBakar {
                            protected $tipe, $harga, $ppn, $jumlah;
                            
                            public function __construct ($tipe, $harga, $jumlah) {
                                $this->tipe = $tipe;
                                $this->harga = $harga;
                                $this->jumlah = $jumlah;
                                $this->ppn = 10;
                            }
                            
                            public function getTipe() {
                                return $this->tipe;
                            }
                            
                            public function getHarga() {
                                return $this->harga;
                            }
                            
                            public function getJumlah() {
                                return $this->jumlah;
                            }
                            
                            public function getPpn() {
                                return $this->ppn;
                            }
                        }
                        
                        class Beli extends BahanBakar
                        {
                            private $metodePembayaran;

                            public function __construct($tipe, $harga, $jumlah, $metodePembayaran)
                            {
                                parent::__construct($tipe, $harga, $jumlah);
                                $this->metodePembayaran = $metodePembayaran;
                            }
                            
                            public function hitungTotal()
                            {
                                $total = $this->harga * $this->jumlah;
                                $total += $total * $this->ppn / 100;
                                
                                return $total;
                            }
                            
                            public function buktiTransaksi()
                            {
                                $total = $this->hitungTotal();
                                echo "<div class='bukti-transaksi'>";
                                echo "<h2>Powered By <span>Shell</span></h2>";
                                    echo "<h5>Puncak Rd KP. PARUNG J No.10, Bendungan, Ciawi, Bogor Regency, West Java 16720l</h5>";
                                        echo "<hr>";
                                    $date1 = date('d-m-y');
                                    $date2 = date('h-i-s');
                                    echo "<p><strong>$date1</strong>Petugas</p>";
                                    echo "<p><strong>$date2</strong>Kasir</p>";
                                    echo "<p><strong>No 0-1</strong></p>";
                                        echo "<hr>";
                                    echo "<p><strong>Jenis Bahan Bakar :</strong> " . "<p>$this->tipe</p>" . "</p>";
                                    echo "<p><strong>Jumlah / Liter :</strong> " . "<p>$this->jumlah L</p>";
                                    echo "<p><strong>Metode Pembayaran :</strong> " . "<p>$this->metodePembayaran</p>" . "</p>";
                                        echo "<hr>";
                                    echo "<p><strong>Total :</strong> Rp " . number_format($total, 2, ',', '.') . "</p>";
                                        echo "<br><br>";
                                    echo "<h3>Link Kritik dan Saran</h3>";
                                    echo "<h6>https://www.shell.com/who-we-are/contact-us.html</h6>";
                                    echo "<button onclick='window.print()' class='button-82-pushable'>
                                            <span class='button-82-shadow'></span>
                                            <span class='button-82-edge'></span>
                                            <span class='button-82-front text'>Cetak
                                        </button>";
                                    echo "<br><br>";
                                echo "</div>";
                            }
                        }

                        $hargaBahanBakar = 
                        [
                            "Shell Super" => 15420.00,
                            "Shell V-Power" => 16130.00,
                            "Shell V-Power Diesel" => 18310.00,
                            "Shell V-Power Nitro" => 16510.00,
                        ];
                        
                        $tipe = $_POST["tipe"];
                        $jumlah = $_POST["jumlah"];
                        $metodePembayaran = $_POST["Metode_Pembayaran"];
                        
                        if (array_key_exists($tipe, $hargaBahanBakar)) {
                            $harga = $hargaBahanBakar[$tipe];
                            $beli = new Beli($tipe, $harga, $jumlah, $metodePembayaran);
                            $beli->buktiTransaksi();
                        } else {
                            echo "<p style='text-align: center;'>Jenis bahan bakar tidak valid.</p>";
                        }
                    }
                ?>
            </div>
        </div>

        <script>
            function Hide() {
                document.getElementById("Payment").style.display = "block";
            }
        </script>
    </body>
</html>