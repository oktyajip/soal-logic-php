<?php

$jumlahCabang = 100;
$pengeluaran_1 = 10000;
$pengeluaran_68 = 30100;

echo "pengeluaran toko kelontong 1 (a) : $pengeluaran_1" . PHP_EOL;
echo "pengeluaran toko kelontong 68 (Un) : $pengeluaran_68" . PHP_EOL;

$beda = (30100 - 10000) / 67;
echo "beda tiap toko (b = (Un-a)/(n-1) ): $beda" . PHP_EOL;

// $pengeluaran_81 = 10000 + ( (81 - 1) * 300 );
$pengeluaran_akhir = 10000;


for ($i=1; $i < 81; $i++) { 
    $pengeluaran_akhir += 300;
}

echo <<<R

Pengeluaran toko kelontong 81 / U81 = 10000 + ( (81 - 1) * 300 ).
penggunaan perulangan :
\$pengeluaran_akhir = 10000;
for (\$i=1; \$i < 81; \$i++) { 
    \$pengeluaran_akhir += 300;
}

R . PHP_EOL;

echo "Pengeluaran toko kelontong 81 (U81): Rp. $pengeluaran_akhir";

