<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        if ($operation == "add") {
            $result = $num1 + $num2;
        } else if ($operation == "subtract") {
            $result = $num1 - $num2;
        } else if ($operation == "multiply") {
            $result = $num1 * $num2;
        } else if ($operation == "divide") {
            if ($num2 == 0) {
                echo "Division by zero is not allowed.";
                exit;
            }
            $result = $num1 / $num2;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
