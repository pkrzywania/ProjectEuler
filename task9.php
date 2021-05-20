<?php

const TRIPLET_SUM = 1000;

function GetTriplet($tripletSum) {
    $a = 1;
    $b = 2;
    $c = 3;
    for ($a = 1; $a < $b; $a++) { 
        for ($b = 2; $b < $c; $b++) {
            for ($c = 3; $c < TRIPLET_SUM / 2; $c++) {
                if (pow($a,2) + pow($b,2) === pow($c,2) && $a + $b + $c === TRIPLET_SUM) {
                    echo "Triplet: " . $a . ", " . $b . ", " . $c . "\r\n";
                    return array($a, $b, $c);
                }
            }
        }
    }

    return null;
}

function GetTripletProduct($tripletSum) {
    $tripletArray = GetTriplet($tripletSum);
    if (isset($tripletArray)) {
        return $tripletArray[0] * $tripletArray[1] * $tripletArray[2];
    } else {
        return 0;
    }
}

echo 'Triplet product: ' . GetTripletProduct(TRIPLET_SUM) . "\r\n";