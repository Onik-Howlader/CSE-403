<?php
// Taking two numbers as input
$number1 = 10;
$number2 = 20;
// Calculations
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;
$quotient = $number1 / $number2;
// Displaying results
echo "Number 1: $number1 <br>";
echo "Number 2: $number2 <br><br>";
echo "Sum: $sum <br>";
echo "Difference: $difference <br>";
echo "Product: $product <br>";
echo "Quotient: $quotient <br>";
?>
<!DOCTYPE html>
<html>
<body>
<form method="post">
  Number 1: <input type="number" name="n1" required><br><br>
  Number 2: <input type="number" name="n2" required><br><br>
  <input type="submit" value="Calculate">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['n1'];
        $number2 = $_POST['n2'];
        echo "<h3>Results:</h3>";
        echo "Sum = " . ($number1 + $number2) . "<br>";
        echo "Difference = " . ($number1 - $number2) . "<br>";
        echo "Product = " . ($number1 * $number2) . "<br>";
        echo "Quotient = " . ($number1 / $number2) . "<br>";
    }
    ?>
</body>
</html>