<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex01.php" method="post">
        <label>number:</label>
        <br>
        <input type="text" name="moreOrLessNumber">
        <br>
        <input type="submit" value ="define">
    </form>

</body>
</html>

<?php

    if (isset($_POST["moreOrLessNumber"])) {
        
        $moreOrLessNumber = $_POST["moreOrLessNumber"];
        
        if ($moreOrLessNumber > 10 ){
            echo $moreOrLessNumber . " is greater than 10!";
        } else if ($moreOrLessNumber == 10){
            echo "Your input is exactly " . $moreOrLessNumber;
        } else {
            echo $moreOrLessNumber . " is less than 10! ";
        };
    }
?>