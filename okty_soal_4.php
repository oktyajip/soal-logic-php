<?php

function ulang($num) {
    if($num <= 10 && $num > 0) {
        if( $num % 2 !== 0) {
            echo $num . ". Bilangan Ganjil" . PHP_EOL;
            return ulang($num + 1);
        } else {
            echo $num . ". Bilangan Genap" . PHP_EOL;
            return ulang($num + 1);
        }
    } else {
        return;
    }
}

ulang(1);