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
        
        $requete="SELECT * FROM cours ORDER BY date_ajout DESC LIMIT 4";
        $stmt=$db->query($requete);
        $resultat=$stmt->fetchall(PDO::FETCH_ASSOC);
 
        setlocale(LC_TIME, 'fr_FR'); // Définir la locale en français
        
        
        foreach ($resultat as $cours) { 
    // Convertir la date en format timestamp si elle n'est pas déjà sous ce format
        $timestamp = strtotime($cours["date_ajout"]);
    
    // Utiliser la classe DateTime pour formater la date en français
    $date = new DateTime();
    $date->setTimestamp($timestamp);

    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    $date_formattee = $formatter->format($date);

       echo  ("

            <div class='blocTp'>

            <div>
                <p> {$date_formattee} </p>
                <h4>{$cours["nom_cours"]}</h4>
            </div>
                <p>{$cours["description"]}</p>

                <div class='acces'>
                    <a class='btnAcces' href='cours.php?id_rsc={$cours["ext_ressource"]}'> Accéder </a>
                    <a href=''><svg xmlns='http://www.w3.org/2000/svg' width='256' height='256' viewBox='0 0 256 256'><g transform='rotate(45 128 128)'><path fill='currentColor' d='M208.49 120.49a12 12 0 0 1-17 0L140 69v147a12 12 0 0 1-24 0V69l-51.51 51.49a12 12 0 0 1-17-17l72-72a12 12 0 0 1 17 0l72 72a12 12 0 0 1 0 17'/></g></svg>
<span class='sr-only'> accès cours </span></a>
                </div>
            </div> " 

        );   
        } ?>

<div class="cours">

<?php         
        
        $requete="SELECT * FROM ressource";
        $stmt=$db->query($requete);
        $resultat=$stmt->fetchall(PDO::FETCH_ASSOC);



        foreach ($resultat as $ressource) { 
           echo ("<div class='blocCours'>

                <div>
                    <img src='{$ressource["url_img"]}' alt=''>
                </div>

                <div class='desc'>
                    <h4> {$ressource["nom_rsc"]}</h4>
                    <p>{$ressource["description"]}</p>
                    <a class='btn' href='cours.php?id_rsc={$ressource["id_ressource"]}'> Accéder </a>
                </div>
            </div>"); 

} ?>
</div>

    </section>


    <div class="blocTitre">
        <h5>Agenda</h5>
        <p>Les devoirs à rendre prochainement </p>
    </div>


    

    <section class="agenda">

        <div class="titleAgenda">
            <h6> Janvier </h6>
            <div class="icons">
                <iconify-icon icon="maki:arrow" width="32" height="32" flip="horizontal"></iconify-icon>
                <iconify-icon icon="maki:arrow" width="32" height="32"></iconify-icon>
                <iconify-icon icon="fluent:calendar-28-regular" width="32" height="32" flip="horizontal"></iconify-icon>
            </div>
        </div>


        <div class="planning">

            <div class="blocDevoir">
                <p class="jour">Lundi 7</p>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

            </div>

            <div class="blocDevoir">
                <p class="jour">Mardi 8</p>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

            </div>

            <div class="blocDevoir">
                <p class="jour">Mercredi 10</p>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

            </div>

            <div class="blocDevoir">
                <p class="jour">Jeudi 11</p>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

            </div>

            <div class="blocDevoir">
                <p class="jour">Vendredi 12</p>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

            </div>
            <div class="blocDevoir">
                <p class="jour">Lundi 15</p>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

            </div>

            <div class="blocDevoir">
                <p class="jour">Mardi 16</p>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

            </div>

            <div class="blocDevoir">
                <p class="jour">Mercredi 17</p>

                <div class="contenu">
                    <div>
                        <p class="devTitre">CV vidéo</p>
                    </div>

                    <div class="details">
                        <p> 23:00</p>
                        <a class="btn" href="">Rendre</a>
                    </div>
                </div>

            </div>
        </div>

    </section>
        <?php
include ("footer.php");
?>


<script src="script.js"></script>
</body>


</html>