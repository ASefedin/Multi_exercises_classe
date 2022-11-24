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

    <!-- Partie traitement niveaux 2-->
    <?php
        function nombreLettre($chaineDepart, $caractere, $nbProbleme)
        (
            $longueurChaine = $chaineDepart
            $nbProbleme = 0
            for ($i=0; $i < $longueurChaine -1; $i++) { 
                if ($chaineDepart[i] = $caractere) {
                    $nbProbleme = $nbProbleme + 1
                }
            }
            $text = nombreLettre;
        )
    ?>
    <!-- Partie traitement niveaux 2--> 
            <p>voici votre reponse <?= nombreLettre(text) ?></p>
</body>
</html>