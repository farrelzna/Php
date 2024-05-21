<?php
class Data {
    public $member;
    public $jenis;
    public $waktu;
    public $diskon;
    protected $pajak;
    private $Scoopy, $Beat, $Vario, $Aerox;
    private $listmember = ['kafka','arko','ardissya'];

    function __construct(){
        $this->pajak = 10000;
    }

    public function getMember(){
        if(in_array($this->member, $this->listmember)){
            return "member";
        }else{
            return "non-member";
        }
    }
    public function setHarga($jenis1, $jenis2, $jenis3, $jenis4){
        $this->Scoopy = $jenis1;
        $this->Beat = $jenis2;
        $this->Vario = $jenis3;
        $this->Aerox = $jenis4;
    }
    public function getHarga() {
        $data["Scoopy"] = $this-> Scoopy;
        $data["Beat"] = $this-> Beat;
        $data["Vario"] = $this-> Vario;
        $data["Aerox"] = $this-> Aerox;
        return $data;
    }
}

class Rent extends Data {
    public function hargaRental () {
        $dataHarga = $this->getHarga()[$this->jenis];
        $diskon = $this->getMember() == "member" ? 5 : 0;
        if ($this->waktu === 1) {
            $bayar = ($dataHarga - ($dataHarga * $diskon / 100)) + $this->pajak;
        }else{
            $bayar = (($dataHarga * $this->waktu) - ($dataHarga * $diskon/100)) + $this->pajak;
        }
        return [$bayar, $diskon];
    }

    public function pembayaran(){
        echo "<center>";
        echo $this->member . " berstatus sebgai " . $this->getMember() . "<br>mendapatkan diskon sebesar " . $this->hargaRental()[1] . "%";
        echo "<br><br>";
        echo "Jenis motor yang dirental adalah<br>" . $this->jenis . " selama " . $this->waktu . " hari";
        echo "<br>";
        echo "Harga rental per-harinya : Rp. " . number_format($this->getHarga()[$this->jenis]);
        echo "<br><br>";
        echo "<b>Besar yang harus dibayarkan adalah: Rp. ". number_format($this->hargaRental()[0]). " (<i>Termasuk Pajak)</i></b>";
        echo "</center>";
    }
}

$Logic = new Rent();
$Logic->member = "kafka";
$Logic->setHarga(40000, 45000, 50000, 55000);

if(isset($_POST["beli"])){
    $Logic->member = $_POST["nama"];
    $Logic->jenis = $_POST["jenis"];
    $Logic->waktu = $_POST["waktu"];
    
    $Logic->hargaRental();

    $Logic->pembayaran();
}