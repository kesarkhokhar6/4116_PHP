<?php
// Function to perform basic arithmetic operations
function calculate($num1, $num2, $operation) {
    switch($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
            
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 != 0) {
                return $num2 == 0 ? 'Division by zero error' : $num1 / $num2;
            } else {
                return "Error: Division by zero";
            }
        default:
            return "Invalid operation";
    }
}

$result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the user
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Validate input
    if (is_numeric($num1) && is_numeric($num2)) {
        // Call the calculate function
        $result = calculate($num1, $num2, $operation);
    } else {
        $result = "Please enter valid numbers.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label for="num1">Enter first number:</label><br><br>
        <input type="text" id="num1" name="num1" required><br><br>

        <label for="num2">Enter second number:</label><br><br>
        <input type="text" id="num2" name="num2" required><br><br>

        <label for="operation">Choose operation:</label><br><br>
        <select id="operation" name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>