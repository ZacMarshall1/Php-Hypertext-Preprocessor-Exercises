<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex10.php" method="post">
        <label>Input the number to be counted up to 50:</label>
        <br>
        <input type="number" name="countToFiftyInput">
        <br>
        <input type="submit" value ="Count To Fifty">
        <br>
    </form>

</body>
</html>

<?php



    if (isset($_POST["countToFiftyInput"])) {
        
        $countToFiftyValue = $_POST["countToFiftyInput"];
        
        function countFromToFifty($countToFiftyValue){
            while($countToFiftyValue <= 50) {
                echo $countToFiftyValue . "<br>";
                $countToFiftyValue++;
            }
        };

        if($countToFiftyValue <= 50 && $countToFiftyValue >= 1){
            countFromToFifty($countToFiftyValue);
        } else {
            echo "Invalid Value, Please make another input";
        }
    }
?>