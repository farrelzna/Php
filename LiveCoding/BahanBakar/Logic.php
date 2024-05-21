<?php

class DataBahanBakar {
    private $hargaSSuper;
    private $hargaSVPower;
    private $hargaSVPowerDiesel;
    private $hargaSVPowerNitro;

    public $JenisYangDipilih;
    public $TotalPerLiter;

    protected $TotalPembayaran;

    public function setHarga($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro) {
        $this->hargaSSuper = $valSSuper;
        $this->hargaSVPower = $valSVPower;
        $this->hargaSVPowerDiesel = $valSVPowerDiesel;
        $this->hargaSVPowerNitro = $valSVPowerNitro;
    }

    public function getHarga() {
        $SemuaDataSolar["SSuper"] = $this->hargaSSuper;
        $SemuaDataSolar["SVPower"] = $this->hargaSVPower;
        $SemuaDataSolar["SVPowerDiesel"] = $this->hargaSVPowerDiesel;
        $SemuaDataSolar["SVPowerNitro"] = $this->hargaSVPowerNitro;

        return $SemuaDataSolar;
    }
}

class Pembelian extends DataBahanBakar {

    public function totalharga() {
        $this->TotalPembayaran = $this->getHarga()[$this->JenisYangDipilih] * $this->TotalPerLiter;
    }

    public function cetakbukti() {
        echo "<tr>";
        echo "Jenis bahan bakar :" . $this->JenisYangDipilih;
        echo "<br>"; 
        echo "Jumlah per liter :" . $this->TotalPerLiter;
        echo "<br>";
        echo "Total pembayaran :" . $this->TotalPembayaran;   
    }
}