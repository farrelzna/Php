<?php
  $string1 = "ini adalah string 1";
  $string2 = 'Variabel juga tidak otomatis ditampilkan : $string1';

  echo $string1;
  // echo "<br>";
  // echo $string2;

  echo "<br>";
  echo "<br>";

  $stringa = "Ini adalah contoh string sederhana 2";
  $stringb =  "Variabel akan otomatis ditampilkan : $stringa";

  echo $stringa;
  echo "<br>";
  echo $stringb;

  echo "<br>";
  echo "<br>";

  $nama = "farrel";
  $umur = 20;

  echo "nama saya adalah ", $nama," dan saya berumur ", $umur;
  echo "<br>";
  echo "nama saya adalah ".$nama." dan saya berumur ".$umur;
  echo "<br>";

  echo "<br>";
  echo "<br>";

  $a = 1;
  $b = 2;
  echo $a + $b;

  $a ="1";
  $a++;
  $a .="3";
  $a *="0.5";

  $b = "10" . "20.25";
  $c = "10" + "20.25";
  $d = 10 + "20.5";

  echo "a = $a"; echo "<br>";
	echo "b = $b"; echo "<br>";
	echo "c = $c"; echo "<br>";
	echo "d = $d"; echo "<br>";
?>