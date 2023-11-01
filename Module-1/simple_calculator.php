<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<h1>Calculator</h1>

<form method="post" action="">
    Number 1: <input type="number" name="number1" value='100' required ><br><br>
    Number 2: <input type="number" name="number2" value='10' required ><br><br>
    Operation:
    <select name="operation" required>
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'addition':
            $result = $number1 + $number2;
            break;
        case 'subtraction':
            $result = $number1 - $number2;
            break;
        case 'multiplication':
            $result = $number1 * $number2;
            break;
        case 'division':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Undefined (division by zero)";
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    echo "<p>Result: $result</p>";
}
?>

</body>
</html>
