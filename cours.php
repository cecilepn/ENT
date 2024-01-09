<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENT - Cours</title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="./css/cours.css">
    <link rel="icon" type="image/png" href="./img/logo.png" />

    <?php
    include("db_connect.php");
    ?>
</head>

<body>

    <?php
    session_start();
    include("header.php");
    ?>

    <section>

        <?php

        // Récupérer la valeur de id_rsc de l'URL
        $id_rsc = isset($_GET['id_rsc']) ? $_GET['id_rsc'] : null;

        // Vérifier si id_rsc est défini et non vide
        if (!empty($id_rsc)) {

            $requete = "SELECT cours.*, ressource.nom_rsc FROM cours 
                        JOIN ressource ON cours.ext_ressource = ressource.id_ressource
                        WHERE ressource.id_ressource = :id_rsc";

            $stmt = $db->prepare($requete);
            $stmt->bindParam(':id_rsc', $id_rsc, PDO::PARAM_INT);
            $stmt->execute();

            $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Stocker le nom de la ressource
            $nomRessource = null;

            foreach ($resultat as $cours) {
                // Utiliser le premier nom de ressource trouvé
                if ($nomRessource === null) {
                    $nomRessource = $cours["nom_rsc"];
                }
            }

            // Afficher le nom de la ressource une seule fois après la boucle
            echo ("<h1>{$nomRessource}</h1>");

            echo ("
            <div class='containCours'>
                <div>
                    <h2>Supports de cours</h2>
                </div>
            ");

            foreach ($resultat as $cours) {
                // Convertir la date en format timestamp si elle n'est pas déjà sous ce format
                $timestamp = strtotime($cours["date_ajout"]);

                // Utiliser la classe DateTime pour formater la date en français
                $date = new DateTime();
                $date->setTimestamp($timestamp);

                $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                $date_formattee = $formatter->format($date);

                echo ("

                        <div class='blocCours'>
                            <h3>{$cours["nom_cours"]}</h3>
                            <p>{$cours["contenu"]}</p>

                            <div class='bottom'>
                                <p> <span> {$date_formattee}</span>, par <span> {$cours["prof"]} </span> </p>
                                <div class='doc'><img src='img/pdf.png' alt=''><a href=''> Télécharger</a></div>
                            </div>

                            <hr>
                        </div>");
            }
        } else {
            // Afficher un message si id_rsc n'est pas défini ou vide
            echo ("<p>Erreur : Identifiant de ressource non valide.</p>");
        }

        ?>

    </section>

    <?php
    include("footer.php");
    ?>

    <script src="script.js"></script>
</body>

</html>
