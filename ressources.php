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
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>


</html>