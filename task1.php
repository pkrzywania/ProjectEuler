<?php

function MultiplesOf3And5($number)
{
    $result = 0;

    for ($i = 3; $i<$number; $i++) {
        if ($i % 3 === 0 || $i % 5 === 0) {
            $result += $i;
        }
    }

    return $result;
}

echo MultiplesOf3And5(1000);
