<?php
$nilai = [80, 78, 72, 84, 92, 88];
$nilaiawal = $nilai; 

$nilaitertinggi = max($nilai);
$nilaiterendah = min($nilai);

sort($nilai);
rsort($nilai);
$ratarata = round(array_sum($nilai) / count($nilai));

$index = array_search(72, $nilaiawal);
if ($index !== false) {
    $nilaiperbaikan = $nilaiawal; 
    $nilaiperbaikan[$index] = 75;
}

$remed = $nilaiperbaikan;

rsort($nilaiperbaikan);

echo "nilai awal : [80, 78, 72, 84, 92, 88]";
echo "<br>";
echo "Nilai saya: " . implode(", ", $nilaiawal); //menggabungakan
echo "<br>";
echo "Nilai tertinggi : $nilaitertinggi";
echo "<br>";
echo "Nilai terkecil : $nilaiterendah";
echo "<br>";
echo "Urutan dari terkecil : " . implode(", ", array_reverse($nilai));
echo "<br>";
echo "Urutan dari terbesar : " . implode(", ", $nilai);
echo "<br>";
echo "Rata-rata: $ratarata";
echo "<br>";
echo "Nilai sebelum perbaikan adalah ". $nilai[5] ." maka nilai sekarang adalah ".$nilaiperbaikan[5]. " maka ".implode(", ", $remed);
echo "<br>";
echo "Urutan nilai saya dari yang terbesar setelah perbaikan : " . implode(", ", $nilaiperbaikan);


////////////////////////////////////////////////////////////////////////  

// $nilai = [80, 78, 72, 84, 92, 88];

// $nilaitertinggi = max($nilai);
// $nilaiterendah = min($nilai);
// asort($nilai);
// arsort($nilai);
// $ratarata = round(array_sum($nilai) / count($nilai));
// $index = array_search(72, $nilai);
// if ($index !== false) {
//     $nilaiperbaikan = $nilai; 
//     $nilaiperbaikan[$index] = 75;
//   }
// $remed = $nilaiperbaikan;
// // array_splice($nilai, 2, 1, 75);

// rsort($nilaiperbaikan);

// echo "nilai awal : [80, 78, 72, 84, 92, 88]";
// echo "<br>";
// echo "nilai tertinggi : "."$nilaitertinggi";
// echo "<br>";
// echo "nilai terendah : "."$nilaiterendah";
// echo "<br>";
// echo "Urutan dari terkecil : " . implode(", ", array_reverse($nilai));
// echo "<br>";
// echo "Urutan dari terbesar : " . implode(", ", $nilai);
// echo "<br>";
// echo "Rata-rata: $ratarata";
// echo "<br>";
// echo "Nilai setelah perbaikan : " . implode(", ", $nilai);
// echo "<br>";
// echo "Urutan nilai saya dari yang terbesar setelah perbaikan : " . implode(", ", $nilaiperbaikan);

?>