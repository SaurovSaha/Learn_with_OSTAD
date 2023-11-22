<?php
function printFibonacci($count) {
    $a = 0;
    $b = 1;

    for ($i = 1; $i <= $count; $i++) {
        echo $a . " ";

        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    echo PHP_EOL;
}

printFibonacci(15);
?>
