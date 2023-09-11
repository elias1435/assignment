<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    // Initialize variables
    $temperature = "";
    $conversion = "";
    $result = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];

        // Perform the temperature conversion
        if ($conversion == "c_to_f") {
            $result = ($temperature * 9/5) + 32;
        } elseif ($conversion == "f_to_c") {
            $result = ($temperature - 32) * 5/9;
        }
    }
    ?>

    <form method="post" action="">
        <label for="temperature">Temperature:</label>
        <input type="number" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>
        
        <label for="conversion">Convert to:</label>
        <select name="conversion" id="conversion" required>
            <option value="c_to_f" <?php if ($conversion == "c_to_f") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="f_to_c" <?php if ($conversion == "f_to_c") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>
        
        <input type="submit" value="Convert">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<p><strong>Result:</strong> $result</p>";
    }
    ?>
</body>
</html>
