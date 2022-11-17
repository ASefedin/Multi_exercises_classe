<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //etape 0 
            echo "--------------------------etape0---------------------------";
            echo '<p> hello world</p>';

        //étape1
            echo "--------------------------etape1---------------------------";
        for ($i=1; $i <= 10; $i++) { 
            echo '<p>le nombre vaut ' . $i .'</p>';
            }
        //étape2
            echo "--------------------------etape2---------------------------";
        for ($i=1; $i <= 10; $i++) {
            if ($i !== 3) {
                echo "<p>le nombre vaut $i</p>";
            }
        }   
        //étape3
            echo "--------------------------etape3---------------------------";
        for ($i=1; $i <= 10; $i++) {
            if ($i < 4 || $i > 7) {
                echo "<p>le nombre vaut $i</p>";
            }
        }
        //étape4
            echo "--------------------------etape4---------------------------";
        $a = -5;
        $b = 10;
        echo "<p>la valeur absolue de $a vaut" . abs($a) . "<p>";
        echo "<p>la valeur absolue de $b vaut" . abs($b) . "<p>";
    ?>
</body>
</html>