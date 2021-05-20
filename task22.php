<?php

function getNameValue($name) {
    $LETTERS = range('A', 'Z');
    $nameArray = str_split($name);
    $nameValue = 0;
    foreach ($nameArray as $letter) {
       $nameValue += array_search($letter, $LETTERS) + 1;
    }

    
    return $nameValue;
}

function getSortedNamesArrayFromFile($filename) {
    $fileContent = file_get_contents($filename, true);
    
    $cleanString = str_replace(',"','', $fileContent);
    $namesArray = explode('"', $cleanString);
    sort($namesArray, SORT_STRING);

    return $namesArray;
}

function calculateNamesValueSum($filename) {
    $sum = 0;
    
    foreach(getSortedNamesArrayFromFile($filename) as $key => $name) {
        $sum += getNameValue($name) * ($key -1);

        if ($name == "COLIN") {
            echo $name . " " . getNameValue($name) * ($key-1) . "\n";
        }
    }

    return $sum;
}

echo calculateNamesValueSum('C:\Users\pkrzywania\Projects\ProjectEuler\p022_names.txt');