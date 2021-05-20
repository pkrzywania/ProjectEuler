<?php

function SmallestMultiple($from, $to) {
    $range = range($from, $to);

    $counter = $from;
    while (true) {
        $multiple = true;

        foreach ($range as $value) {
            // echo $counter . '%' . $value . '=' . $counter % $value . "\n";
            if ($counter % $value !== 0) {
                $multiple = false;
                break;
            }
        }

        if ($multiple) {
            return $counter;
        }

        $counter++;
    }

    return 0;
} 

echo SmallestMultiple(1, 20);
