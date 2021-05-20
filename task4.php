<?php

function isPalindrom($number) {
    if (strlen($number) % 2 === 0 && $number > 10) {
        $numberArray = str_split(strval($number), strlen($number) / 2);
        $numberArray[1] = strrev($numberArray[1]);
        if ($numberArray[0] == $numberArray[1]) {
            return true;
        }
    }

    return false;
}

function largestPalindrom($digitsNumber) {
    $largestPalindrom = 0;
    $treshold = pow(10, $digitsNumber) - 1;
    for($i = 1; $i <= $treshold; $i++) {
        for ($j = 1; $j <= $treshold; $j++) {
            $multiplay = $i * $j;
            if (isPalindrom($multiplay) && $multiplay > $largestPalindrom) {
                $largestPalindrom = $multiplay;
            }
        }
    }

    return $largestPalindrom;
}

echo largestPalindrom(3);