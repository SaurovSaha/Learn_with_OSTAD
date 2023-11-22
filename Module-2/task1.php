<?php
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
    echo PHP_EOL;
}
printEvenNumbersFor(2, 20, 2);
?>


<?php
function EveneNumberWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
    echo PHP_EOL;
}

EveneNumberWhile(2, 20, 2);
?>


<?php
function EvenDoWhile($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
    echo PHP_EOL;
}

EvenDoWhile(2, 20, 2);
?>