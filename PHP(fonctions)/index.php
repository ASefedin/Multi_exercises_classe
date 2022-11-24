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
            {
                $resultatFactorielle = 1;
                    for ($i=1; $i < $nombreDepart ; $i++) { 
                        $resultatFactorielle = $resultatFactorielle*$i;
                    }
                    return $resultatFactorielle;
            }
                
            
        ?>
    <!-- Partie affichage -->
        <p>La factorielle de 7 vaut <?= Factorielle(7) ?></p>

    <!-- Partie traitement niveaux 2-->
        <?php
            function nombreLettre($chaineDepart, $caractere)
            {
                $longueurChaine = strlen($chaineDepart);
                $nbProbleme = 0;
                    for ($i=0; $i < $longueurChaine -1; $i++) { 
                        if ($chaineDepart[$i] = $caractere) {
                            $nbProbleme = $nbProbleme + 1;
                        }
                    }
                    return $nbProbleme;
            }
        ?>
    <!-- Partie traitement niveaux 2--> 
    <p>L’utilisateur encode Bienvenue en 5TI et n, Le programme renvoie : “Il y a 3 n dans l’expression.<?= nombreLettre("Bienvenue en 5TI", "n") ?></p>
</body>
</html>