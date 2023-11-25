<?php

function removeEvenNumbers($numbers) {
    $filteredNumbers = array_filter($numbers, function ($value) {
        return $value % 2 != 0;
    });

    print_r($filteredNumbers);
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);

?>
