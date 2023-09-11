<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    // Initialize variables
    $temperature = 0;

    // Set the temperature (you can change this value)
    $temperature = 20;

    // Provide weather information based on temperature range
    if ($temperature <= 0) {
        $message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        $message = "It's cool.";
    } elseif ($temperature > 15 && $temperature <= 25) {
        $message = "It's warm.";
    } else {
        $message = "It's hot!";
    }
    ?>

    <p><strong>Temperature:</strong> <?php echo $temperature; ?>°C</p>
    <p><strong>Weather:</strong> <?php echo $message; ?></p>
</body>
</html>
