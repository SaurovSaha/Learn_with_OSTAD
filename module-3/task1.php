<?php

function manipulateString($text) {
    $lowercaseText = strtolower($text);
    $modifiedText = str_replace("brown", "red", $lowercaseText);

    echo $modifiedText . "\n";
}
$text = "The quick brown fox jumps over the lazy dog.";

manipulateString($text);

?>
