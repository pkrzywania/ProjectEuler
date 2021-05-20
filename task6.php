<?php

function SquareOfSum($value) {
    $sum = 0;
    for ($i=1; $i <=$value ; $i++) { 
        $sum += $i;
    }
    return $sum * $sum;
}

function SumOfSquers($value) {
    $sum = 0;
    for ($i=0; $i <= $value ; $i++) { 
        $squer = $i *$i;
        $sum += $squer;
    }
    return $sum;
}

function GetResult($value) {
    return SquareOfSum($value) - SumOfSquers($value);
}

echo GetResult(100);