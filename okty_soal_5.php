<?php
$layanan = ["Makanan", "Minuman", "Parsel"];
for ($i=0; $i < count($layanan); $i++) { 
    echo $layanan[$i] . PHP_EOL;
    echo "1. Menu $layanan[$i] ke 1" . PHP_EOL;
    echo "2. Menu $layanan[$i] ke 2" . PHP_EOL;
    echo "3. Menu $layanan[$i] ke 3" . PHP_EOL;
}