<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/form.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>Ajdini Sefedin</title>
</head>
<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.html">Home</a></li>
            <li  class="menu"><a href="profil.html">Page profil</a></li>
            <li class="menu"><a href="inscription.php">Inscription</a></li>
            <li class="menu"><a href="connexion.php">Connexion</a></li>
            <li class="imageMenu"><a href="index.html"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.html"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="inscription.php"><ion-icon size="large" name="mail-open-outline"></ion-icon>
            <li class="imageMenu"><a href="connexion.php"><ion-icon size="large" name="mail-outline"></ion-icon></a></li>
        </ul>
    </header>
    <h1>Inscription</h1>
            <main>
                <div class="flex space-around">
                    <fieldset class="color">
                    <legend>Vos coordonées</legend>
                        <form action="">
                            <div>
                                <label for="nom">Votre nom :</label>
                                <input type="text" id="nom" placeholder="votre Nom">
                            </div>
                            <div>
                                <label for="prenom">Votre prenom :</label>
                                <input type="text" id="prenom" placeholder="votre Prenom">
                            </div>
                            <div>
                                <label for="date">Date de naissance :</label>
                                <input type="date" id="date">
                            </div>
                            <div>
                                <label for="email">Adresse mail :</label>
                                <input type="email" id="email" placeholder="votre adresse mail">
                            </div>
                            <div>
                                <label for="password">Mot de passe</label>
                                <input type="password" id="password" placeholder="votre Mot de passe">
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
                                <button class="style">inscription</button>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </main>
            <footer>
                <div class="flex space-between align-item-center">
                    <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
                        <div>
                            <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                            <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                            <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
                        </div>
                </div>
            </footer>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>