<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex03.php" method="post">
        <label>input A:</label>
        <br>
        <input type="number" name="compareInputA">
        <br>
        <label>input B:</label>
        <br>
        <input type="number" name ="compareInputB">
        <br>
        <input type="submit" value ="Compare">
        <br>
    </form>

</body>
</html>

<?php

    if (isset($_POST["compareInputA"]) && isset($_POST["compareInputB"])) {
        
        $compareNumberA = $_POST["compareInputA"];
        $compareNumberB = $_POST["compareInputB"];

        if ($compareNumberA == $compareNumberB) {
            echo "invalid Sequence";
        }else if ($compareNumberA > $compareNumberB) {
            echo "Input A, " . $compareNumberA . " is greater than " . $compareNumberB;
        } else if ($compareNumberA < $compareNumberB){
            echo "Input B, " . $compareNumberB . " is greater than " . $compareNumberA;
        }
    }
?>