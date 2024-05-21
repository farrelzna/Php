<?php

abstract class Alatelektronik {
    abstract public function lihat_spek();
    public function hidupkan_komputer() {
        echo "Hidupkan Komputer";
    }
}

class Laptopbaru extends Alatelektronik {
    public function lihat_spek() {
        return "Lihat spek laptop";
    }
    public function beli_laptop() {
        return "Beli laptop";
    }
}

class handphone extends Alatelektronik {
    public function lihat_spek() {
        return "Lihat spek Handphone";
    }
    public function beli_handphone() {
        return "Beli handphone";
    }
}

$laptop_baru = new laptopbaru();
echo $laptop_baru->lihat_spek();
echo "<br>";
echo $laptop_baru->beli_laptop();
echo "<br>";
echo "<br>";

//=================================================================================================================//