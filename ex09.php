<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex09.php" method="post">
        <label>input A:</label>
        <br>
        <input type="number" name="moreLessOrEqualCompareInputA">
        <br>
        <label>input B:</label>
        <br>
        <input type="number" name ="moreLessOrEqualCompareInputB">
        <br>
        <input type="submit" comparisonValue ="Show Results">
        <br>
    </form>

</body>
</html>

<?php

    if (isset($_POST["moreLessOrEqualCompareInputA"]) && isset($_POST["moreLessOrEqualCompareInputB"])) {
        
        $comparisonValueA = $_POST["moreLessOrEqualCompareInputA"];
        $comparisonValueB = $_POST["moreLessOrEqualCompareInputB"];

        function moreLessOrEqualVerification($comparisonValueA, $comparisonValueB){
            if ($comparisonValueA == $comparisonValueB){
                return "equal";
            }else if ($comparisonValueA > $comparisonValueB){
                return "greater";
            }else {
                return "lower";
            }
        }

        $equalGreaterOrLower = moreLessOrEqualVerification($comparisonValueA, $comparisonValueB);

        switch($equalGreaterOrLower) {
            case "equal":
                echo $comparisonValueA . " is equal to " . $comparisonValueB . "!";
                break;
            case "greater":
                echo "The Values Are Different, And " . $comparisonValueA . " Is Greater Than " . $comparisonValueB . "!";
                break;
            case "lower":
                echo "The Values Are Different, And " . $comparisonValueB . " Is Greater Than " . $comparisonValueA . "!";
        }
    }
?>