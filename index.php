<!DOCTYPE html>
<html lang="en">
<head></head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja prvá sránka v PHP</title>
</head>
<body>
    <h1>Vitajte na mojej prvej stránke v PHP!</h1>
    <?php
    echo "<h1>Hello world</h1>";
    echo "Dnes je " . date("d/m/Y") . "<br>";
    echo "aktuálny čas je " . date("H:i:s")."<br>";
    ?>
</body>
</html>