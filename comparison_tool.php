<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h1>Number Comparison Tool</h1>

    <?php
    // Initialize variables
    $number1 = "";
    $number2 = "";
    $result = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $result = ($number1 > $number2) ? $number1 : $number2;
    }
    ?>

    <form method="post" action="">
        <label for="number1">Enter the first number:</label>
        <input type="number" name="number1" id="number1" value="<?php echo $number1; ?>" required><br>

        <label for="number2">Enter the second number:</label>
        <input type="number" name="number2" id="number2" value="<?php echo $number2; ?>" required><br>

        <input type="submit" value="Compare">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<p><strong>Larger Number:</strong> $result</p>";
    }
    ?>
</body>
</html>
