<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Checker</title>
</head>
<body>

<h1>Even/Odd Checker</h1>

<form method="post" action="">
    Enter a number: <input type="number" name="number" required></br>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if ($number % 2 == 0) {
        echo "<p>$number is an even number.</p>";
    } else {
        echo "<p>$number is an odd number.</p>";
    }
}
?>

</body>
</html>
