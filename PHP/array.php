<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter numbers (comma-separated): <br>
    <input type="text" name="nums" required>
    <input type="submit" value="Process">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numbers = array_map('intval', explode(",", $_POST['nums']));

    echo "First: " . $numbers[0] . "<br>";
    echo "Last: " . end($numbers) . "<br>";

    $numbers[] = 12;
    echo "After adding 12: " . implode(", ", $numbers) . "<br>";

    echo "Sum: " . array_sum($numbers);
}
?>
</body>
</html>
