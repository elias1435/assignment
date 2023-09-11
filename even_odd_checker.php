<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Checker</title>
</head>
<body>
    <h1>Even/Odd Checker</h1>

    <?php
    // Initialize variables
    $number = "";
    $result = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $number = $_POST["number"];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result = "Even";
        } else {
            $result = "Odd";
        }
    }
    ?>

    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" value="<?php echo $number; ?>" required>
        
        <input type="submit" value="Check">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<p><strong>Result:</strong> $result</p>";
    }
    ?>
</body>
</html>
