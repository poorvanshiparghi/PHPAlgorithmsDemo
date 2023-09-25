<?php

    $numbers = [10, 11, 23, 54, 33, 267, 44, 20, 111];

    $max = $numbers[0];

    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }

    echo "The maximum value in the array is: $max";
?>