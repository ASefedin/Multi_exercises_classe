<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <p>"--------------------------etape1---------------------------"</p>
            <p> Hello World</p>

            <p>"--------------------------etape1---------------------------"</p>
            <?php for ($i=1; $i <= 10  ; $i++) : ?> 
                <p>Le nombre vaut <?= $i ?> </p>
            <?php endfor ?> 

            <p>"--------------------------etape2---------------------------"</p>
            <?php for ($i=1; $i <= 10  ; $i++) : ?> 
                <?php if ($i !== 3) : ?>
                   <p>Le nombre vaut <?= $i ?> </p>
                <?php endif ?>
            <?php endfor ?> 

            <p>"--------------------------etape3---------------------------"</p>
            <?php for ($i=1; $i <= 10  ; $i++) : ?> 
                <?php if ($i < 4 || $i > 7) : ?>
                   <p>Le nombre vaut <?= $i ?> </p>
                <?php endif ?>
            <?php endfor ?> 

            <p>"--------------------------etape4---------------------------"</p>
        <?php
            $nbr1 = -5;
            $nbr2 = 10;
        ?>
        
        <p>la valeur absolue de <?= $nbr1 ?> vaut <?=  abs($nbr1) ?> <p>
        <p>la valeur absolue de <?= $nbr2 ?> vaut <?=  abs($nbr2) ?> <p>
</body>
</html>