<?php

require_once "task3.php";

const LIMIT = 2000000;

function SumPrimes($limit) {
    
    $sum = 0;
    for ($i = 2; $i < $limit; $i++) {
        if (isPrime($i)) {
            $sum += $i;
        }
    }
    return $sum;
}

echo "Sum of primes below " . LIMIT . " is: " . SumPrimes(LIMIT). "\n\r";