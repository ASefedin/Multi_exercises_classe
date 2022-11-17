<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <form action="" method="">
        <h1 class="flex justify-content-space-evenly">formulaire</h1>
            <div class="flex justify-content-space-evenly ">
                <div class="gauche">
                    <fieldset class="color">
                        <legend>Vos coordonées</legend>
                        <div>
                            <label for="nom">entre votre nom :</label>
                            <input type="text" id="nom" placeholder="votre Nom">
                        </div>
                        <div>
                            <label for="prenom">entre votre prenom :</label>
                            <input type="text" id="prenom" placeholder="votre Prenom">
                        </div>
                        <div>
                            <label for="date">entre une date de naissance :</label>
                            <input type="date" id="date">
                        </div>
                        <div>
                            <label for="email">entre votre adresse mail :</label>
                            <input type="email" id="email" placeholder="votre adresse mail">
                        </div>

                        <div>
                            <label for="pays">Pays de résidence :</label>
                            <select id="pays" name="pays">
                                <optgroup label="Europe">
                                    <option value="belgique">Belgique</option>
                                </optgroup>
                                <optgroup label="Amerique du nord">
                                    <option value="Etats-unis">Etats-unis</option>
                                    <option value="Canada">Canada</option>
                                </optgroup>
                                <optgroup label="Asie">
                                    <option value="Japon">Japon</option>
                                    <option value="Chine">Chine</option>
                                </optgroup>
                            </select>
                        </div>

                        <div>
                            <label for="copie">Nombre de copie souhaités :</label>
                            <input type="number" value="1">
                        </div>
                    </fieldset>
                </div>

                <div>
                    <fieldset class="color">
                        <legend>Périodicité</legend>
                            <div>
                                <input type="radio" id="h" name="sexe" value="homme">
                                <label for="h">Newsletter hebdomadaire</label>
                            </div>
                            
                            <div>
                                <input type="radio" id="f" name="sexe" value="femmme">
                                <label for="f">Newsletter mensuel</label> 
                            </div>
                            <div>
                                <input type="radio" id="h" name="sexe" value="homme">
                                <label for="h">Newsletter trimestrielle</label>
                            </div>
                    </fieldset>

                    <fieldset class="color">
                        <legend>Version papier - informatique</legend>

                        <div class="champ">
                            <div>
                                <input type="checkbox" id="recevoir le version papier" name="competences" value="recevoir le version papier">
                                <label for="recevoir le version papier">recevoir le version papier</label>
                            </div>
                            <div>
                                <input type="checkbox" id="recevoir le version informatique" name="competences" value="recevoir le version informatique">
                                <label for="recevoir le version papier">recevoir le version informatique</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="flex justify-content-space-evenly button">
                <input type="submit" value="envoyer">
            </div>
        </form>
    </main>
</body>
</html>