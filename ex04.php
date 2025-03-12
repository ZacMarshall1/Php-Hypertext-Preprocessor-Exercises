<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex04.php" method="post">
        <label>input A:</label>
        <br>
        <input type="number" name="operationsInputA">
        <br>
        <label>input B:</label>
        <br>
        <input type="number" name ="operationsInputB">
        <br>
        <input type="submit" value ="Calculate">
        <br>
    </form>

</body>
</html>

<?php

    if (isset($_POST["operationsInputA"]) && isset($_POST["operationsInputB"])) {
        
        $operationsNumberA = $_POST["operationsInputA"];
        $operationsNumberB = $_POST["operationsInputB"];

        echo "Sum of " . $operationsNumberA . " + " . $operationsNumberB . " = " . $operationsNumberA + $operationsNumberB;
        echo "<br>";
        echo "Subtraction of " . $operationsNumberA .  " - " . $operationsNumberB . " = " . $operationsNumberA - $operationsNumberB;
        echo "<br>";
        echo "Multiplication of " . $operationsNumberA . " X " . $operationsNumberB . " = " . $operationsNumberA * $operationsNumberB;
        echo "<br>";
        echo "Division of " . $operationsNumberA . " ÷ " . $operationsNumberB . " = " . $operationsNumberA / $operationsNumberB;

        
    }
?>