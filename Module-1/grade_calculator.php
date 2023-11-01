<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>

<h1>Grade Calculator</h1>

<form method="post" action="">
    Bangla: <input type="number" name="bangla" min="0" max="100" required><br><br>
    English: <input type="number" name="english" min="0" max="100" required><br><br>
    Math: <input type="number" name="math" min="0" max="100" required><br><br>
    <input type="submit" value="Calculate Grade">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bangla = $_POST['bangla'];
    $english = $_POST['english'];
    $math = $_POST['math'];

    // Calculate the average
    $average = ($bangla + $english + $math) / 3;

    // Determine the grade based on the average
    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    echo "<p>Average: $average</p>";
    echo "<p>Grade: $grade</p>";
}
?>

</body>
</html>
