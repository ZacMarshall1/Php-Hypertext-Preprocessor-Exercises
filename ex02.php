<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex02.php" method="post">
        <label>input one:</label>
        <br>
        <input type="number" name="sumInputNumberOne">
        <br>
        <label">input two:</label>
        <br>
        <input type="number" name ="sumInputNumberTwo">
        <br>
        <input type="submit" value ="sum">
        <br>
    </form>

</body>
</html>

<?php

    if (isset($_POST["sumInputNumberOne"]) && isset($_POST["sumInputNumberTwo"])) {
        
        $sumNumberOne = $_POST["sumInputNumberOne"];
        $sumNumberTwo = $_POST["sumInputNumberTwo"];
        $sumResult = $sumNumberOne + $sumNumberTwo;

        echo "<h1>" . $sumNumberOne . " + " . $sumNumberTwo . " = " . $sumResult . "</h1>";
    }
?>