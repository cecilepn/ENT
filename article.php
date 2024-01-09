<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENT - Suivi Scolarité </title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="./css/articles.css">
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


    <section class="article">
    
    <?php

// Récupérer la valeur de id_actu de l'URL
$id_actu = isset($_GET['id_actu']) ? $_GET['id_actu'] : null;

// Vérifier si id_actu est défini et non vide
if (!empty($id_actu)) {

    $requete = "SELECT actualite.*, actualite.titre FROM actualite WHERE id_actu = :id_actu";

    $stmt = $db->prepare($requete);
    $stmt->bindParam(':id_actu', $id_actu, PDO::PARAM_INT);
    $stmt->execute();

    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Stocker le nom de la ressource
    $nomActu = null;

    foreach ($resultat as $actu) {
        if ($nomActu === null) {
            $nomActu = $actu["titre"];
        }
    }

    echo " <div class='artTitre'> <h1>{$nomActu}</h1>";
}; 

foreach ($resultat as $actu) {
    // Convertir la date en format timestamp si elle n'est pas déjà sous ce format
    $timestamp = strtotime($actu["date_actu"]);

    // Utiliser la classe DateTime pour formater la date en français
    $date = new DateTime();
    $date->setTimestamp($timestamp);

    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    $date_formattee = $formatter->format($date);

    echo ("<p> {$date_formattee}, par {$actu["auteur"]} </p> </div>");
}; 
?>


        <div class="art">
            <div class="text">
                <h2><?php echo ("{$actu["sstitre"]}") ; ?> </h2>

                <p><?php echo ("{$actu["contenu_actu"]}") ; ?> </p>
            </div>

            <img class="photo" src="<?php echo ("{$actu["url_img"]}") ; ?>" alt="">
        </div>


    </section>

    <h3> Articles recommandés </h3>

    <section class="recommendation">

        <div class="container">

        <?php 

        $requete = "SELECT * FROM `actualite` ORDER BY `actualite`.`date_actu` DESC LIMIT 3";
        $stmt = $db->query($requete);
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultat as $art) {      
            // Utiliser substr pour obtenir un extrait du contenu
            $extrait = substr($art["contenu_actu"], 0, 70); 

            echo ("
                <div class='blocArt'>

                    <img src='{$art["url_img"]}' alt=''>

                    <div class='blocText'>
                        <h4>{$art["titre"]}</h4>
                        <p>{$extrait}</p>
                        <div class='date'>
                            <p>{$art["date_actu"]}, par {$art["auteur"]}</p>
                            <a href='article.php?id_actu={$art["id_actu"]}'> Lire plus...</a>
                        </div>
                    </div>
                </div>");
                }; 
        
        ?>
    

        </div>

        <div class="container">
        <?php 

        $requete = "SELECT * FROM `actualite` ORDER BY `actualite`.`date_actu` ASC LIMIT 3";
        $stmt = $db->query($requete);
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultat as $art) {      
            // Utiliser substr pour obtenir un extrait du contenu
            $extrait = substr($art["contenu_actu"], 0, 70); 

            echo ("
                <div class='blocArt'>

                    <img src='{$art["url_img"]}' alt=''>

                    <div class='blocText'>
                        <h4>{$art["titre"]}</h4>
                        <p>{$extrait}</p>
                        <div class='date'>
                            <p>{$art["date_actu"]}, par {$art["auteur"]}</p>
                            <a href='article.php?id_actu={$art["id_actu"]}'> Lire plus...</a>
                        </div>
                    </div>
                </div>");
                }; 
        
        ?>
        </div>

    </section>

    <?php
include ("footer.php");
?>

<script src="script.js"></script>

</body>

</html>