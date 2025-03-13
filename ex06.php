<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex06.php" method="post">
        <label>Input temperature in Celcius to conversion:</label>
        <br>
        <input type="number" name="temperatureInput">
        <br>
        <input type="submit" value ="Calculate Celcius to Fahrenheit">
        <br>
    </form>

</body>
</html>

<?php



    if (isset($_POST["temperatureInput"])) {
        
        $celciusTemperatureValue = $_POST["temperatureInput"];

        function calculateCelsiusToFahrenheit($celciusTemperatureValue){
            $fahrenheitTemperatureValue = (9 * $celciusTemperatureValue + 160) / 5;
            return($fahrenheitTemperatureValue);
        };

        $fahrenheitTemperatureValue = calculateCelsiusToFahrenheit($celciusTemperatureValue);

        echo "The temperature in Fahrenheit is: " . $fahrenheitTemperatureValue . "°F.";
        
    }
?>