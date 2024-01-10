<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENT - Suivi Scolarité </title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="./css/suivi.css">
    <link rel="icon" type="image/png" href="./img/logo.png" />

    <?php
include ("db_connect.php");
?>
</head>

<body>

<?php
session_start();

include("header.php");

$id_user_connecte = $_SESSION["id"];



$requete = "SELECT absence.*, prof.* 
            FROM absence
            INNER JOIN prof ON absence.ext_prof = prof.id_prof 
            WHERE absence.ext_user = :id_user
            ORDER BY STR_TO_DATE(absence.date_abs, '%Y-%m-%d') DESC, STR_TO_DATE(absence.heure_debut, '%H:%i') DESC";

$stmt = $db->prepare($requete);
$stmt->bindParam(':id_user', $id_user_connecte, PDO::PARAM_INT);
$stmt->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="absences">
    <h1>Mes Absences</h1>

    <div class="containerAbs">
        <div class="top">
            <p>Etat</p>
            <p>Heures manquées : </p>
            <p>Justification</p>
        </div>
        <hr>

        <?php
        // Définir la locale en français
        setlocale(LC_TIME, 'fr_FR');

        $totalHeuresAbsences = 0;
        $totalHeuresFormate = null;

        foreach ($resultats as $absence) {
            $dateDebut = new DateTime($absence["date_abs"] . ' ' . $absence["heure_debut"]);
            $dateFin = new DateTime($absence["date_abs"] . ' ' . $absence["heure_fin"]);

                // Calculer la durée
    $difference = $dateDebut->diff($dateFin);
    $duree = $difference->format('%Hh%i');

    // Ajouter la durée à la variable cumulatrice
    list($heures, $minutes) = explode('h', $duree);
    $totalHeuresAbsences += $heures + $minutes / 60;

            // Convertir la date en format timestamp si elle n'est pas déjà sous ce format
            $timestamp = strtotime($absence["date_abs"]);
            // Formater la date en français et l'heure
            $date = new DateTime();
            $date->setTimestamp($timestamp);

            $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
            $dateFormatee = $formatter->format($date);

            $heureDebutFormatee = $dateDebut->format('H\hi');
            $heureFinFormatee = $dateFin->format('H\hi');

            // Afficher les informations du professeur lié à l'absence
            $professeur = $absence["nom"] . " " . $absence["prenom"];

            // Calculer la durée
            $difference = $dateDebut->diff($dateFin);
            $duree = $difference->format('%Hh%i');

            echo ("<div class='row'>
               <div class='left'>
                   <img src='{$absence["img_profile"]}' alt='' class='pp_prof'>
                   <div class='text'>
                       <p> {$dateFormatee}, {$heureDebutFormatee} à {$heureFinFormatee}</p>
                       <p>Absence du cours de {$professeur} </p>
                   </div>
               </div>

               <div class='heure'>
                   <p>{$duree}</p>
               </div>

               <div class='btn'>
                   <a href=''> Ajouter </a>
                   <a href=''> Modifier </a>
               </div>
           </div>
           <hr>");

           // Formater le total des heures d'absences
if ($totalHeuresAbsences === null || $totalHeuresAbsences == 0) {
    $totalHeuresFormate = '0h';
} else {
    $totalHeuresFormate = sprintf('%02d', floor($totalHeuresAbsences)) . 'h' . sprintf('%02d', ($totalHeuresAbsences * 60) % 60);
}

        }
?>
    </div>

    <hr>

    <div class="totAbs">
    <p>Total d'heures d'absences : <span><?php echo $totalHeuresFormate; ?></span></p>
</div>
        


        </div>

    </section>


<!-- section notes -->

<?php 

$requete = "SELECT note.*, ressource.*, prof.* 
            FROM note
            INNER JOIN ressource ON note.ext_ressource = ressource.id_ressource
            INNER JOIN prof ON note.ext_prof = prof.id_prof
            WHERE note.ext_user = :id_user";

$stmt = $db->prepare($requete);
$stmt->bindParam(':id_user', $id_user_connecte, PDO::PARAM_INT);
$stmt->execute();
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

    <section class="notes">

        <div>
            <h1>Mes Notes</h1>
            <h2>Notes les plus récentes </h2>
        </div>

        <div class="containerNotes">

        <?php 
        // Initialiser les variables pour le calcul de la moyenne
        $sumProduits = 0;
        $sumCoefficients = 0;

        foreach ($resultat as $note) {
            // Note et coefficient de la ressource actuelle
            $noteRessource = $note["note"];
            $coeffRessource = $note["coeff"];

            // Calculer la somme pondérée des produits
            $sumProduits += $noteRessource * $coeffRessource;

            // Calculer la somme totale des coefficients
            $sumCoefficients += $coeffRessource;

            // Afficher les informations du professeur lié à la note
            $professeur = $note["nom"] . " " . $note["prenom"];

            // Afficher les informations de la ressource liée à la note
            $ressource = $note["nom_rsc"];

            echo (" <div class='blocNote'>
            <div class='note'>{$noteRessource}/20</div>
            <div class='desc'>
                <h3>{$note["controle"]}</h3>
                <div class='descNote'>
                    <p>{$note["com"]}</p>
                    <p>{$ressource}, {$professeur}</p>
                </div>
            </div>

        </div>"); 

         }; 

         // Calculer la moyenne générale
        $moyenneGenerale = ($sumCoefficients > 0) ? round($sumProduits / $sumCoefficients, 2) : 0;

        ?>
           

        </div>

        <hr>

        <div class="recap">
    <div class="doc">
        <p>Mon relevé de notes</p>
        <a href=""> Télécharger </a>
    </div>

    <div class="moyenne">
        <p>Moyenne générale : <span><?php echo $moyenneGenerale; ?>/20</span></p>
    </div>
</div>
    </section>


    <?php
include ("footer.php");
?>

<script src="script.js"></script>


</body>

</html>