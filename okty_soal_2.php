<?php

$uangSetyo = (3 * 10000) + (4 * 5000) + (5 * 20000);
$hargaMainan = 55000;
$uangSekarang = $uangSetyo - $hargaMainan;

echo "Uang Setyo: Rp." . $uangSetyo . PHP_EOL;
echo "Harga Mainan: Rp." . $hargaMainan . PHP_EOL;

echo "Uang Setyo sekarang: " . $uangSetyo . " - " . $hargaMainan . " = Rp." . $uangSekarang . PHP_EOL;
