<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>

<h1>Temperature Converter</h1>

<form method="post" action="">
    Temperature Value: <input type="text" name="temperature" required><br><br>
    Conversion Direction: </br>
    <input type="radio" name="conversion" value="celsius_to_fahrenheit" required> Celsius to Fahrenheit
</br>
    <input type="radio" name="conversion" value="fahrenheit_to_celsius" required> Fahrenheit to Celsius<br><br>
    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $conversion = $_POST['conversion'];

    if ($conversion == "celsius_to_fahrenheit") {
        $converted_temperature = ($temperature * 9/5) + 32;
        echo "<p>$temperature degrees Celsius is equal to $converted_temperature degrees Fahrenheit.</p>";
    } elseif ($conversion == "fahrenheit_to_celsius") {
        $converted_temperature = ($temperature - 32) * 5/9;
        echo "<p>$temperature degrees Fahrenheit is equal to $converted_temperature degrees Celsius.</p>";
    }
}
?>

</body>
</html>
