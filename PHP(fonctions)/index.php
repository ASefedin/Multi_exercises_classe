<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Partie traitement -->
    <?php 
        function Factorielle($nombreDepart)
        (
            $resultatFactorielle = 1;
            for ($i=1; $i < $nombreDepart ; $i++) { 
                $resultatFactorielle = $resultatFactorielle*$i
            }

            return $resultatFactorielle;
        )
    ?>
    <!-- Partie affichage -->
    <p>La factorielle de 7 vaut <?= Factorielle(7) ?></p>
</body>
</html>