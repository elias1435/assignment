<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    // Initialize variables
    $score1 = "";
    $score2 = "";
    $score3 = "";
    $average = "";
    $grade = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the corresponding letter grade
        if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }
    }
    ?>

    <form method="post" action="">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" value="<?php echo $score1; ?>" required><br>

        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" value="<?php echo $score2; ?>" required><br>

        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" value="<?php echo $score3; ?>" required><br>

        <input type="submit" value="Calculate Grade">
    </form>

    <?php
    // Display the result
    if ($average !== "") {
        echo "<p><strong>Average Score:</strong> $average</p>";
        echo "<p><strong>Letter Grade:</strong> $grade</p>";
    }
    ?>
</body>
</html>
