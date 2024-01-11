<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENT - Ressources </title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="./css/ressources.css">
    <link rel="icon" type="image/png" href="./img/logo.png" />
    <?php
include ("db_connect.php");
?>
</head>

<body>

    <?php session_start();

        include ("header.php");
    ?>

<div class="blocTitre">
        <h1>Devoirs et cours </h1>
        <h2>C'est ici que je peux consulter les devoirs et les cours </h2>
    </div>


    <section class="premier">

        <div class="containFiltres">
            <a class="filtre" href=""> Design </a>
            <a class="filtre" href=""> Développement web </a>
            <a class="filtre" href=""> Audiovisuel </a>
        </div>

        <h3> Derniers cours ajoutés </h3>

        <div class='tps'>
        <?php
    // Vérifier si l'utilisateur est connecté
    $filtre_annee = ""; // Initialiser la variable de filtre

    if (isset($_SESSION["login"])) {
        // Récupérer la valeur de ext_annee pour l'utilisateur connecté
        $requete_utilisateur = "SELECT ext_annee FROM utilisateur WHERE user_login=:login";
        $stmt_utilisateur = $db->prepare($requete_utilisateur);
        $stmt_utilisateur->bindParam(':login', $_SESSION["login"], PDO::PARAM_STR);
        $stmt_utilisateur->execute();

        // Vérifier si la requête a retourné un résultat
        if ($stmt_utilisateur->rowCount() == 1) {
            $utilisateur_info = $stmt_utilisateur->fetch(PDO::FETCH_ASSOC);
            $filtre_annee = $utilisateur_info["ext_annee"];
        }
    }

    // Requête SQL pour récupérer les ressources filtrées par ext_annee
    $requete_ressource = "SELECT * FROM ressource WHERE ext_annee = :filtre_annee";
    $stmt_ressource = $db->prepare($requete_ressource);
    $stmt_ressource->bindParam(':filtre_annee', $filtre_annee, PDO::PARAM_STR);
    $stmt_ressource->execute();

    $resultat_ressource = $stmt_ressource->fetchAll(PDO::FETCH_ASSOC);

    // Boucle pour afficher les ressources filtrées
    foreach ($resultat_ressource as $ressource) {
        echo ("<div class='blocCours'>
                <div>
                    <img src='{$ressource["url_img"]}' alt=''>
                </div>
                <div class='desc'>
                    <h4>{$ressource["nom_rsc"]}</h4>
                    <p>{$ressource["description"]}</p>
                    <a class='btn' href='cours.php?id_rsc={$ressource["id_ressource"]}'> Accéder </a>
                </div>
            </div>");
    }; 
?>
        </div>

    </section>


    <div class="blocTitre">
        <h5>Agenda</h5>
        <p>Les devoirs à rendre prochainement </p>
    </div>


    

    <section class="agenda">

<?php
// Initialiser la variable pour le mois par défaut (le mois actuel)
$mois_selectionne = date('Y-m');

// Si le formulaire a été soumis, il met à jour le mois sélectionné
if (isset($_POST['mois_selectionne'])) {
    $mois_selectionne = $_POST['mois_selectionne'];
}

// Requête SQL pour récupérer les devoirs filtrés par ext_annee et le mois sélectionné
$requete_devoir = "SELECT * FROM devoir WHERE ext_annee = :filtre_annee AND DATE_FORMAT(date_dev, '%Y-%m') = :mois_annee_filtre ORDER BY date_dev ASC";
$stmt_devoir = $db->prepare($requete_devoir);
$stmt_devoir->bindParam(':filtre_annee', $filtre_annee, PDO::PARAM_STR);
$stmt_devoir->bindParam(':mois_annee_filtre', $mois_selectionne, PDO::PARAM_STR);
$stmt_devoir->execute();

$resultat_devoir = $stmt_devoir->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="titleAgenda">
    <!-- Formulaire pour sélectionner le mois -->
    <form method="post">
        <label for="mois_selectionne">Choisir le mois :</label>
        <input type="month" id="mois_selectionne" name="mois_selectionne" value="<?php echo $mois_selectionne; ?>" />
        <button class="affiche" type="submit">Afficher</button>
    </form>

<!-- Afficher le mois sélectionné -->
<?php
$date_selectionnee = new DateTime($mois_selectionne . '-01');
$formatter_selectionnee = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE, null, null, 'MMMM');
$mois_formatte = $formatter_selectionnee->format($date_selectionnee);
?>
<h6> <?php echo $mois_formatte; ?> </h6>

</div>

<div class="planning">
    <?php
    if (!empty($resultat_devoir)) {
        foreach ($resultat_devoir as $devoir) {
            $timestamp_devoir = strtotime($devoir["date_dev"]);
            
            $date = new DateTime();
            $date->setTimestamp($timestamp_devoir);

            // Formater la date en français
            $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
            $date_formattee = $formatter->format($date);

            // Formater l'heure
            $heure_formattee = date('H:i', strtotime($devoir["heure"]));

            echo ("<div class='blocDevoir'>
                <p class='jour'> {$date_formattee}</p>

                <div class='contenu'>
                    <div>
                        <p class='devTitre'>{$devoir["nom_dev"]}</p>
                    </div>

                    <div class='details'>
                        <p> {$heure_formattee}</p>
                        <a class='btn' href=''>Rendre</a>
                    </div>
                </div>
            </div>");
        };
    } else {
        echo ("<p> Aucun devoir à rendre prochainement </p>");
    }
    ?>
</div>

</section>




        <?php
include ("footer.php");
?>



<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<script src="script.js"></script>
</body>


</html>