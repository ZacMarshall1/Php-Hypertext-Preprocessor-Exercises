<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex08.php" method="post">
        <label>input: </label>
        <br>
        <input type="number" name="moreOrLessInput">
        <input type="submit" value ="Verify Number">
        <br>
    </form>

</body>
</html>

<?php

    if (isset($_POST["moreOrLessInput"])) {
        $moreOrLessVerificationNumber = $_POST["moreOrLessInput"];
        $equalGreaterOrLower = "";

        function moreOrLessVerification($moreOrLessVerificationNumber){
            if ($moreOrLessVerificationNumber == 50){
                return "equal";
            }else if ($moreOrLessVerificationNumber > 50){
                return "greater";
            }else {
                return "lower";
            }
        }

        $equalGreaterOrLower = moreOrLessVerification($moreOrLessVerificationNumber);

        switch($equalGreaterOrLower) {
            case "equal":
                echo $moreOrLessVerificationNumber . " Is Exactly to 50!";
                break;
            case "greater":
                echo $moreOrLessVerificationNumber . " Is Greater Than 50!";
                break;
            case "lower":
                echo $moreOrLessVerificationNumber . " Is Lower Than 50!";
        }
    }
?>