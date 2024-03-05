<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variabel Static</h1>
    <?php
    Function dicoba() {
        Static $a = 0;
        Echo "nilai a :";
        Echo $a;
        Echo "<br>";
        $a++;
    }
    dicoba();
    dicoba();
    dicoba();
    dicoba();

    ?>
</body>
</html>