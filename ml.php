<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENT - Mentions Légales </title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="./css/ml.css">
    <link rel="icon" type="image/png" href="./img/logo.png" />
    <?php
include ("db_connect.php");
?>
</head>

<body>

<?php
session_start();

include ("header.php");
?>
    <section>

        <h1> Mentions légales </h1>

        <div class="text">
            <div class="bloc">
                <h2>A propos du site : </h2>
                <ul>
                    <li>
                        <h3>Editeurs</h3>
                        <p>PHAN NGUYEN Cécile, BALIT Diyana, BREUX Louis</p>
                    </li>

                    <li>
                        <h3>Contact</h3>
                        <a href="mailto:cecile.phan-nguyen@edu.univ-eiffel.fr">PHAN NGUYEN Cécile</a>
                    </li>

                    <li>
                        <h3>Création de l'habillage du site </h3>
                        <p>BALIT Diyana, PHAN NGUYEN Cécile, BREUX Louis</p>
                    </li>

                    <li>
                        <h3>Développement web </h3>
                        <p>PHAN NGUYEN Cécile</p>
                    </li>

                    <li>
                        <h3>Conception graphique </h3>
                        <p>BALIT Diyana, BREUX Louis</p>
                    </li>

                    <li>
                        <h3> Hébergeur : O2Switch </h3>
                        <p>222-224 Boulevard Gustave Flaubert - 63000 Clermont-Ferrand </p>
                    </li>
                </ul>
                
            </div>
            <div class="bloc">
                <h2>Mentions Légales -  Environnement Numérique de Travail (ENT) :</h2>
                <p>Le présent Environnement Numérique de Travail (ENT) est édité par CÉCILE PHAN NGUYEN DIYANA BALIT LOUIS BREUX, situé au 2 Rue Albert Einstein, 77420 Champs-sur-Marne
, et joignable par courriel à cecile.phan-nguyen@edu.univ-eiffel.fr.</p>
  
            </div>

            <div class="bloc">
            <h2>Application du RGPD :</h2>
                <p>La protection de la vie privée de nos utilisateurs est une préoccupation majeure. Conformément au Règlement général sur la protection des données (RGPD), nous nous engageons à garantir la confidentialité, l'intégrité, et la sécurité des informations personnelles collectées sur cet ENT.
            <h3>Collecte de données :</h3>
<p>Les informations personnelles collectées sur cet ENT sont nécessaires pour la mise en œuvre des services éducatifs. Ces données sont traitées conformément aux dispositions légales en vigueur et dans le respect des droits des utilisateurs.</p>
<h3>Utilisation des cookies :</h3>
<p>L'utilisation de cookies sur cet ENT vise à améliorer l'expérience utilisateur et à recueillir des statistiques. En naviguant sur cet ENT, l'utilisateur consent à l'utilisation de ces cookies. Un bandeau d'information dédié est présent lors de la première visite afin d'obtenir ce consentement.</p>
<h3>Sécurité des données :</h3>
<p>Des mesures de sécurité appropriées sont mises en place pour protéger les données personnelles contre tout accès non autorisé, divulgation, altération ou destruction.</p>
<h3>Droits des utilisateurs :
</h3>
<p> En vertu du RGPD, les utilisateurs ont le droit d'accéder, de rectifier, d'effacer, de limiter le traitement, d'opposer au traitement, et de demander la portabilité de leurs données. Pour exercer ces droits, veuillez nous contacter à cecile.phan-nguyen@edu.univ-eiffel.fr.</p>
  
            </div>
        </div>

        <div class="btn"><a href="index.php">Retour</a></div>

    </section>



    <?php
include ("footer.php");
?>

<script src="script.js"></script>

</body>

</html>