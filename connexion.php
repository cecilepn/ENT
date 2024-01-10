<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - ENT </title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="icon" type="image/png" href="./img/logo.png" />

</head>

<body>

    <section>
        <div class="left">
            <img src="img/logo-co.png" alt="">
            <div class="intro">
                <img src="img/element1.png" alt="" class="element1">
                <h1>Bienvenue</h1>
                <p>Plongez dans l'Espace Numérique de Travail, votre allié pour des cours, des ressources, et des
                    échanges
                    simplifiés. Explorez et enrichissez votre parcours académique en toute facilité.
                </p>
                <img src="img/element2.png" alt="" class="element2">
            </div>

        </div>



        <div class="right">
            <h2>Connexion</h2>

            <?php
                include ("db_connect.php");
                session_start();
                if (isset($_SESSION["login"]))
            ?>

            <form action="traite_login.php" method="GET">
                <label>Adresse Mail</label>
                <input type="text" placeholder="Entrer l'adresse mail" name="mail" required> 

                <?php 
if (isset($_GET["err"]) && $_GET["err"]=="mail") { echo "Erreur sur l'adresse mail.";}
?>

                <label>Mot de passe</label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <?php 
if (isset($_GET["err"]) && $_GET["err"]=="mdp") { echo "Erreur sur le mot de passe";}
?>

                <input type="submit" id='submit' value='Se connecter' class="btn-co">
            </form>

            <img src="img/element3.png" alt="" class="element3">
        </div>
    </section>
 



</body>

</html>