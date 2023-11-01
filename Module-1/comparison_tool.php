<!DOCTYPE html>
<html>
<head>
    <title>Larger Number Finder</title>
</head>
<body>

<h1>Larger Number Finder</h1>

<form method="post" action="">
    Number 1: <input type="number" name="number1" required><br><br>
    Number 2: <input type="number" name="number2" required><br><br>
    <input type="submit" value="Find Larger Number">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $larger_number = ($number1 > $number2) ? $number1 : $number2;

    echo "<p>The larger number is: $larger_number</p>";
}
?>

</body>
</html>
