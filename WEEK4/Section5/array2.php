<?php

$siswa = [
  ['nama' => 'Alice', 'nilai' => 85],
  ['nama' => 'Bob', 'nilai' => 92],
  ['nama' => 'Charlie', 'nilai' => 78],
  ['nama' => 'David', 'nilai' => 64],
  ['nama' => 'Eva', 'nilai' => 90],
];

$average = array_sum(array_column($siswa, 'nilai')) / count($siswa);

echo "Siswa yang memperoleh nilai lebih dari rata-rata:<br>";

foreach ($siswa as $siswa) {
  if ($siswa['nilai'] > $average) {
    echo $siswa['nama'] ." ". $siswa['nilai'] . "<br>";
  }
}
?>