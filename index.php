<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method = "GET">
            <input type="number" name = "number" required>
            <select name="temp" id="" required>
                <option value="nothing"> choose</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Celsius">Celsius</option>
                <input type="submit">
            </select>
        </form>
        <?php
            if (isset($_GET["number"]) && isset($_GET["temp"]))
            {       
                $number = $_GET["number"];
                $temp = $_GET["temp"];

            if ( $temp  == "Fahrenheit")
                echo "<h1> in Fahrenheit : " . (($number * 9/5) + 32) . "</h1>";
            else if ($temp == "Celsius")
                echo "<h1> in Celsius : " . (($number - 32) * 5/9) . "</h1>";
            else 
                echo  "</h1> choose the type of convertion . </h1>";
            }
        ?>
    </body>
</html>
