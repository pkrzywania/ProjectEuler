<?php

require_once 'task3.php';

const PRIME_N_NUMBER = 10001;

function GetNPrimeNumber($primeNumber) {
    $foundedPrime = 1;
    $value = 0;

    while($foundedPrime <= $primeNumber) {
        $value++;
        if(isPrime($value)) {
            // echo "value:" . $value . ", prime number: " . $foundedPrime ."\n";
            $foundedPrime++;
        }
        
    }

    return $value;
}
echo "\rStart calculating " . PRIME_N_NUMBER . "\n";
echo PRIME_N_NUMBER . " prime number valu is: " . GetNPrimeNumber(PRIME_N_NUMBER);