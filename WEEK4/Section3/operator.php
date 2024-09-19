<?php
$a = 10;
$b = 5; 

$hasilTambahan = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah : {$hasilTambahan} <br>";
echo "Hasil Kurang : {$hasilKurang} <br>";
echo "Hasil Kali : {$hasilKali} <br>";
echo "Hasil Bagi : {$hasilBagi} <br>";
echo "Sisa Bagi : {$sisaBagi} <br>";
echo "Pangkat : {$pangkat} <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama : {$hasilSama} <br>";
echo "Hasil Tidak Sama : {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil : {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar : {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama : {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama : {$hasilLebihBesarSama} <br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And : {$hasilAnd} <br>";
echo "Hasil Or : {$hasilOr} <br>";
echo "Hasil Not A : {$hasilNotA} <br>";
echo "Hasil Not B : {$hasilNotB} <br>";
echo "<br>";

$hasilSummation = $a += $b;
$hasilSubtraction = $a -= $b;
$hasilMultiplication = $a *= $b;
$hasilInivision = $a /= $b;
$hasilRemainderDividedBy = $a %= $b;

echo "Hasil Summation : {$hasilSummation} <br>";
echo "Hasil Subtraction : {$hasilSubtraction} <br>";
echo "Hasil Multiplication : {$hasilMultiplication} <br>";
echo "Hasil Inivision : {$hasilInivision} <br>";
echo "Hasil Remainder Devided By : {$hasilRemainderDividedBy} <br>";
echo "<br>";

$hasilIdentik = $a == $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik : {$hasilIdentik} <br>";
echo "Hasil Tidak Identik : {$hasilTidakIdentik} <br>";
echo "<br>";
?>