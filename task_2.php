<?php

$numbers = range(1, 10);


function evenNumbers($numbers) {
    $result = array();
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    return $result;
}

$Numbers = evenNumbers($numbers);
print_r($Numbers);