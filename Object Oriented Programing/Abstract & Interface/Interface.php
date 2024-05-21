<?php

interface hewan {
    public function suara();
    public function makanan();
}

class Mahlukhidup {
    public function intro () {
        return "Termasuk mahluk hidup";
    }
}

class harimau extends Mahlukhidup implements hewan {
    public function suara() {
        return "roar"; 
    }
    public function makanan() {
        return "daging";
    }
}

$harimau = new Harimau;
echo $harimau->suara();
echo "<br>";
echo $harimau->makanan();
echo "<br>";
echo $harimau->intro();

//=================================================================================================================//