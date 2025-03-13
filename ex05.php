<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex05.php" method="post">
        <label>input A:</label>
        <br>
        <input type="number" name="valueInversionInputA">
        <br>
        <label>input B:</label>
        <br>
        <input type="number" name ="valueInversionInputB">
        <br>
        <input type="submit" value ="Show Results">
        <br>
    </form>

</body>
</html>

<?php

    if (isset($_POST["valueInversionInputA"]) && isset($_POST["valueInversionInputB"])) {
        
        $valueA = $_POST["valueInversionInputA"];
        $valueB = $_POST["valueInversionInputB"];
        $valueHolder = $valueA;
        
        echo "Original Values: <br>" . $valueA . "<br>" . $valueB;

        $valueA = $valueB;
        $valueB = $valueHolder;

        echo "<br>Inverted Values: <br>" . $valueA . "<br>" . $valueB;


    }
?>