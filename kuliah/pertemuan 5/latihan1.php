<?php
// pertemuan 5 - ARRAY
// Array adalah variabel yang dapat menyimpan banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";

$bulan1 = "januari";
$bulan2 = "februari";

// membuat array
$hari = ["senin", "selasa", "rabu", "kamis", "jumat"] // versi baru
$bulan = array("januari", "februari", "maret"); //versi lama

// mencetak array
// menggunakan index, dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2]
echo "<br>";

// menggunakan var_dump() atau print_r()
// hanya untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak untuk user
// menggunakan looping
for($i = 0 $i < count; $ii=++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// menggunakan foreach
// pengulangan khusus ARRAY
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

// memanipulasi array
// menambah 1 elemen di akhir
$hari[] = "jumat";
$hari[] = "sabtu";
print_r($hari);
echo "<br>";
$bulan[] = "april";
$bulan[] = "mei";
print_r($bulan);

?>


