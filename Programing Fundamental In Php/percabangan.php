<?php
// studi kasus :
// seorang dosen akan memberikan penilaian dengan kriteria;
// nilai >= 80 ; nilai mutu A
// nilai >= 75 ; nilai mutu B
// nilai >= 70 ; nilai mutu C
// nilai >= 60 ; nilai mutu D
// nilai >= 50 ; nilai mutu E

// versi 1

$nilai=70; //buatlah variabel

  if($nilai>=90){
    echo "nilai anda adalah " . $nilai . " Maka nilai masuk kategori A anda dan dinyatakan lulus"; //kalau nilainya >= 100 maka lulus
  } elseif($nilai>=80){
    echo "nilai anda adalah " . $nilai . " Maka nilai masuk kategori B anda dan dinyatakan lulus"; //kalau nilainya >= 80 maka lulus
  }  elseif($nilai>=70){
    echo "nilai anda adalah " . $nilai . " Maka nilai masuk kategori C anda dan dinyatakan lulus"; //kalau nilainya >= 75 maka lulus
  }  elseif($nilai>=65){
    echo "nilai anda adalah " . $nilai . " Maka nilai masuk kategori D dan anda dinyatakan tidak lulus";  //kalau nilainya >= 65 maka lulus
  } else {
    echo "nilai anda adalah " . $nilai . " Maka nilai masuk kategori E dan anda dinyatakan tidak lulus";  //kalau nilainya tidak termasuk kaetgori tidak lulus
  }

  echo '<br><br>';

// //versi 2

  $nilai2=101;

  if ($nilai2 >= 90){
    $nilaimutu='A';
    $ket2='lulus';
  } elseif ($nilai2 >= 80){
    $nilaimutu='B';
    $ket2='lulus';
  } elseif($nilai2 >= 70){
    $nilaimutu='C';
    $ket2='lulus';
  } elseif($nilai2 >= 65){
    $nilaimutu='D';
    $ket2='tidak lulus';
  } else{
    $nilaimutu='E';
    $ket2='tidak lulus';
  }
  echo "nilai anda ".$nilai2." maka mutu nilai anda adalah ".$nilaimutu." dinyatakan ".$ket2;
  echo '<br><br>';

  // versi 3
  
  $nilai3=67;

  if ($nilai3 >= 90){
    $nilaimutu3='A';
  } elseif ($nilai3 >= 80){
    $nilaimutu3='B';
  } elseif($nilai3 >= 70){
    $nilaimutu3='C';
  } elseif($nilai3 >= 65){
    $nilaimutu3='D';
  } else{
    $nilaimutu3='E';
  }

  if ($nilaimutu3=='A'){
    $ket3='lulus';
  } elseif ($nilaimutu3=='B'){
    $ket3='lulus';
  } elseif ($nilaimutu3=='C'){
    $ket3='lulus';
  } elseif ($nilaimutu3=='D'){
    $ket3='tidak lulus';
  } else{
    $ket3='tidak lulus';
  }

  echo "nilai anda ".$nilai3." maka mutu nilai anda adalah ".$nilaimutu3." dinyatakan ".$ket3;

// versi 3.1

if($nilaimutu4=='A' || $nilaimutu4=='B' || $nilaimutu4=='C' ){
  $ket3="lulus";
} else{
  $ket4='Tidak Lulus';
}

echo "nilai anda" .$nilai3. "maka mutu anda".$nilaimutu4."dinyatakan".$ket3;
echo "<br>";
echo "nilai anda" .$nilai3. "maka mutu anda".$nilaimutu."dinyatakan".$ket4;
?>