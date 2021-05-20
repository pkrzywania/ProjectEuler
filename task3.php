    <?php

function isPrime($number)
{
    // 1 is not prime
    if ( $number == 1 ) {
        return false;
    }
    // 2 is the only even prime number
    if ( $number == 2 ) {
        return true;
    }
    // square root algorithm speeds up testing of bigger prime numbers
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }
 
    if( $x == $i-1 ) {
        return true;
    } else {
        return false;
    }
}

function largestPrimeFactor($value) {
    $biggestPrime = 0;

    $treshold = $value / 2;
    for ($i = 2; $i <= $treshold; $i++) {
        if (isPrime($i)) {
            if ($value % $i === 0) {
                $biggestPrime = $i;
                echo $i . "\n";
            }
        }
    }

    return $biggestPrime;
}

// echo largestPrimeFactor(600851475143);