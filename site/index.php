<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 12</title>
</head>
<body>
<h1>
<?php
        $willekeurigeVariable = 3;
        $willekeurigeVariable = true;
        $willekeurigeVariable = [true, "yes", 4, "Cameron"];
        echo $willekeurigeVariable [1];

        $willekeurigeVariable[4] = "van Asperen";
        echo $willekeurigeVariable[4];

        $willekeurigeVariable[0] = false;

        print_r($willekeurigeVariable);

        print_r($_SERVER)

    ?>
</body>
</html>