<?php
$a = 0;
$b = 1;

for ($i = 1; $i <= 10; $i++) {
    $next = $a + $b;
    echo $next . " ";

    if ($next > 100) {
        break;
    }

    $a = $b;
    $b = $next;
}
echo PHP_EOL;
?>

