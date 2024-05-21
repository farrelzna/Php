<?php
  //membuat array kosong
  $buah = array();
  $hobi = [];
  
  // membuat array sekaligus mengisinya
  $minuman = array("Kopi", "Teh", 50, TRUE, .5, [1,2,3]);
  $makanan = ["Nasi Goreng", "Soto", "Bubur"];
  $makanan[3] = "Mie";
  unset($makanan[2]);
  // menambahkan item array
  $variable_array[indexygbelumada] = isi;
  array_push($variable_array, isi); // menambahkan di belakang
  array_unshift($variable_array, isi); // menambah depan
  // menghapus item array
  unset($variable_array[index]); //index tertentu
  array_pop($variable_array); // hapus item paling belakang
  array_shift($variable_array); // hapus item paling depan
  
  // membuat array dengan mengisi indeks tertentu
  $anggota[1] = "Dian";
  $anggota[2] = "Muhar";
  $anggota[0] = "Sera";
  
  var_dump($minuman);
  var_dump($makanan);
  var_dump($anggota);

  //// asosiatif
  
// membuat array asosiatif
  $student = [
      "nama" => "Beni",
      "rombel" => "PPLG XI-1",
      "usia" => 17
  ];
  $student["nama"];

  // mencetak isi array assosiatif
  echo "<h2>".$student["nama"]."</h2>";
  echo "<p>Rombel: ".$student["rombel"]."</p>";
  echo "<p>Usia: ".$student["usia"]."</p>";
  
  //// multi dimensi

// ini adalah array dua dimensi
$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

$array = [
	[
		"nama" => "Fema",
		"rombel" => "PPLG X-1",
		"nilai" => [10,20,30]
	],
	[
		"nama" => "Fe",
		"rombel" => "PPLG X-1",
		"nilai" => [10,20,30]
	],
	[
		"nama" => "F",
		"rombel" => "PPLG X-1",
		"nilai" => [10,40,30]
	]
];

// cara mengakses isinya
echo $array[2]["nilai"][1];

foreach ($array as $index => $item) {
		echo $item["nilai"][1];
}
?>