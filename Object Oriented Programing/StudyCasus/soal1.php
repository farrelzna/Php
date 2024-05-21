<?php
//membuat class dengan value bebas
class laptop {
  
  public $nama;
  public $brand;

  public function __construct($input_nama , $input_brand) {
      $this->nama = $input_nama;
      $this->brand = $input_brand;
  }
  public function print() {
    echo "Mobil " . $this->nama . " dengan merek " . $this->brand . '<br>';  
  }
}

$input1 = new laptop('Banyu', 'Asus');
$input1->print();

$input2 = new laptop('ijan', 'toyota');
$input2->print();

//=================================================================================================================//