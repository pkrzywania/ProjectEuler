<?php

function EvenFibonacciNumbers($threshold) {
    $current = 2;
    $prev = 1;
    $sum = 0;
    while ($current < $threshold) {
        if ($current % 2 === 0) {
            $sum += $current;
        }

        $temp = $prev;
        $prev = $current;
        $current += $temp;
        
    }

    return $sum;
}

echo EvenFibonacciNumbers(4000000);