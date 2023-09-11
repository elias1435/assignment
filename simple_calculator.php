<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <?php
    // Initialize variables
    $number1 = "";
    $number2 = "";
    $operation = "";
    $result = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];

        // Perform the selected arithmetic operation
        if ($operation == "addition") {
            $result = $number1 + $number2;
        } elseif ($operation == "subtraction") {
            $result = $number1 - $number2;
        } elseif ($operation == "multiplication") {
            $result = $number1 * $number2;
        } elseif ($operation == "division") {
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Cannot divide by zero!";
            }
        }
    }
    ?>

    <form method="post" action="">
        <label for="number1">Enter the first number:</label>
        <input type="number" name="number1" id="number1" value="<?php echo $number1; ?>" required><br>

        <label for="number2">Enter the second number:</label>
        <input type="number" name="number2" id="number2" value="<?php echo $number2; ?>" required><br>

        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<p><strong>Result:</strong> $result</p>";
    }
    ?>
</body>
</html>
