<?php

function generatePassword($length) {

    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';


    $allChars = $lowercase . $uppercase . $numbers . $specialChars;
    $shuffledChars = str_shuffle($allChars);


    $password = substr($shuffledChars, 0, $length);
    
    return $password;
}

$generatedPassword = generatePassword(12);
echo "Generated Password: $generatedPassword\n";

?>
