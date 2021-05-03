<?php

$bolpoin = 1750;
$uang_rian = 5 * 5000;
$selusin_bolpoin = 12 * $bolpoin;
$uang_kembalian = $uang_rian - $selusin_bolpoin;

echo "Harga Bolpoin: Rp.$bolpoin" . PHP_EOL;
echo "Harga 1 lusin bolpoin ( 12 * $bolpoin ): Rp." . 12 * $bolpoin . PHP_EOL; 
echo "Uang Riyan : Rp." . $uang_rian . PHP_EOL;

echo "Kembalian uang Riyan ( $uang_rian - $selusin_bolpoin ) : Rp." . $uang_kembalian . PHP_EOL;