<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex07.php" method="post">
        <label>input: </label>
        <br>
        <input type="number" name="intervalInput">
        <input type="submit" value ="Verify interval">
        <br>
    </form>

</body>
</html>

<?php

    if (isset($_POST["intervalInput"])) {
        $intervalVerificationNumber = $_POST["intervalInput"];
        $isValidNumber = false;

        function verifyInputInterval($intervalVerificationNumber){
            if($intervalVerificationNumber >= 100 && $intervalVerificationNumber <= 200){
                echo "the Value " . $intervalVerificationNumber . " is within 100 and 200!<br>";
                return true;
            } else {
                return false;
            }
        }

        $isValidNumber = verifyInputInterval($intervalVerificationNumber);
        
        if($isValidNumber == false){
            echo $intervalVerificationNumber . " Is Not a Valid Number. Please, Try Again.";
        }
        
    }
?>