<?php
// Inisialisasi variabel
$pemasukan = 50000000;
$hutangA = 16500000;
$bungaA = 0.05;
$hutangB = 9500000;
$bungaB = 0.045;

// Perhitungan
$sisaUang = $pemasukan - ($hutangA + ($hutangA * $bungaA)) - ($hutangB + ($hutangB * $bungaB));
$total_BungaHutang = ($hutangA * $bungaA) + ($hutangB * $bungaB);
$totalHutang = $hutangA + ($hutangA * $bungaA) + $hutangB + ($hutangB * $bungaB);

// Menampilkan hasil
echo "Sisa uang: $sisaUang" ;
echo "<br />" ;
echo "Total bunga: $total_BungaHutang " ;
echo "<br />" ;
echo "Total hutang: $totalHutang " ;

?>
