<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENT - MMI</title>
    <link rel="stylesheet" href="general.css">


    <!-- Swiper JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="stylesheet" href="index.css">

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


<section class="landing">
        <h1> Bienvenue <br><?php if(isset($_SESSION["prenom"])) {
    echo '<span>' . $_SESSION["prenom"] . '</span>';
}
?> </h1>

        <div>
            <ul>
                <li><a href=""> Notification 1 : Une nouvelle note a été ajoutée. </a></li>
                <hr>
                <li><a href=""> Notification 2 : Un nouveau cours a été ajouté. </a>
                </li>
                <hr>
                <li><a href=""> Notification 3 : Une absence a été ajoutée. </a></li>
                <hr>
            </ul>
        </div>

    </section>

    <section class="recently">

        <div>
            <h2>Récemment...</h2>
        </div>
        <div class="containRecent">
            <div class="frame">
                <a href=""> Prochain cours : <span> intégration </span> </a>
                <div class="blocDate">
                    <p> <span> date </span></p>
                    <a href="planning.php"> <iconify-icon icon='eva:diagonal-arrow-right-up-fill' width='50' ></iconify-icon> <span class="sr-only"> Vers planning </span></a>
                </div>
            </div>

            <div class="frame">
                <a href=""> Prochain cours : <span> intégration </span> </a>
                <div class="blocDate">
                    <p> <span> date </span></p>
                    <a href="planning.php"> <iconify-icon icon='eva:diagonal-arrow-right-up-fill' width='50' ></iconify-icon><span class="sr-only"> Vers planning </span></a>
                </div>
            </div>
            

            <div class="frame">
                <a href=""> Prochain cours : <span> intégration </span> </a>
                <div class="blocDate">
                    <p> <span> date </span></p>
                    <a href="planning.php"> <iconify-icon icon='eva:diagonal-arrow-right-up-fill' width='50' ></iconify-icon> <span class="sr-only"> Vers planning </span></a>
                </div>
            </div>

            <div class="frame2">
                <a href="ressources.php"> Accès aux ressources </a> 
                <a href="ressources.php"> <span class="sr-only"> Accès aux ressources </span> <iconify-icon icon='eva:diagonal-arrow-right-up-fill' width='25' ></iconify-icon></a> 
            </div>
        </div>

    </section>

    <section class="actualite">

        <div>
            <h3> Actualités de la semaine... </h3>
        </div>

        <div class="containFiltres">
            <a href="" class="filtre vert"> Université </a>
            <a href="" class="filtre violet"> IUT </a>
            <a href="" class="filtre orange"> MMI </a>
        </div>
        
        
        <div class="containNews swiper mySwipe">
    <div class="swiper-wrapper">
        <?php
        $requete = "SELECT * FROM `actualite` ORDER BY `actualite`.`date_actu` DESC";
        $stmt = $db->query($requete);
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultat as $art) {
            // Utiliser substr pour obtenir un extrait du contenu
            $extrait = substr($art["contenu_actu"], 0, 300);

            echo ("
                <div class='swiper-slide'>
                    <div class='new'>
                        <h4>{$art["titre"]}</h4>
                        <p>{$extrait}</p>
                        <a href='article.php?id_actu={$art["id_actu"]}'>Lire plus...</a>
                    </div>
                </div>
            ");
        }
        ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
    </section>

    <!-- <section class="videos">

        <div class="blocVideo">
            <iframe width="600" height="400" src="https://www.youtube.com/embed/8uVHEAaj75A?si=m82koOJNTXVClQib"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <h5> Film de présentation </h5>

        </div>

        <div class="blocVideo">
            <iframe width="290" height="190" src="https://www.youtube.com/embed/8uVHEAaj75A?si=m82koOJNTXVClQib"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <h5> Film de présentation </h5>
        </div>

        <div class="blocVideo">
            <iframe width="290" height="190" src="https://www.youtube.com/embed/8uVHEAaj75A?si=m82koOJNTXVClQib"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <h5> Film de présentation </h5>

        </div>

    </section> -->


    <section class="menuCrous">

        <div class="top">
            <h6> Menu </h6>
        </div>

        <div class="bloc topB">
            <p class="aliment"> Boissons </p>
            <ul class="boisson">
                <li> <p>EAU 50cl</p> <p>3€</p></li>
                <li> <p>SODA 50cl</p> <p>4€</p> </li>
                <li> <p>EXPRESSO </p> <p>1,50€</p> </li>
                <li> <p>CHOCOLAT CHAUD</p> <p>2€</p> </li>
                <li> <p>CAFE NOISETTE</p> <p>2€</p> </li>
                <li> <p>ALLONGE</p> <p>2€</p> </li>
            </ul>

        </div>

        <div class="bloc trois">
            <p class="aliment"> Plats </p>
            <ul class="plat">
            <li> <p>SANDWICH POULET</p> <p>3€</p></li>
                <li> <p>SALADE</p> <p>4€</p> </li>
                <li> <p>QUICHE </p> <p>3€</p> </li>
                <li> <p>PASTA BOX</p> <p>5€</p> </li>
                <li> <p>SANDWICH ORIENTAL</p> <p>3€</p> </li>
                <li> <p>SANDWICH SAUMON</p> <p>6€</p> </li>
            </ul>
        </div>

        <div class="bloc quatre">
            <p class="aliment"> Desserts </p>
            <ul class="dessert">

            <li> <p>COOKIE</p> <p>2€</p></li>
                <li> <p>YAOURT</p> <p>3€</p> </li>
                <li> <p>MUFFIN </p> <p>3€</p> </li>
                <li> <p>BEIGNET</p> <p>1€</p> </li>
                <li> <p>PAIN CHOCOLAT</p> <p>1,50€</p> </li>
                <li> <p>CROISSANT</p> <p>1,30€</p> </li>

            </ul>

        </div>

        <div class="bloc cinq">
            <p class="aliment"> Snacks </p>
            <ul class="snack">

            <li> <p>CHIPS</p> <p>2€</p></li>
                <li> <p>BONBONS</p> <p>1,20€</p> </li>
                <li> <p>BRETZELS </p> <p>1,30€</p> </li>
                <li> <p>POPCORN</p> <p>4€</p> </li>
                <li> <p>NACHOS</p> <p>5€</p> </li>
                <li> <p>BISCUITS</p> <p>1,30€</p> </li>

            </ul>
            </ul>
        </div>
        <div class="bloc six">
            <p class="aliment"> Formules</p>
            <ul class="formules">
                <div>
                <li> <p>FORMULE FIRST</p> <p>1€</p></li>
                <li> <p>FORMULE CAMPUS CLASSIQUE</p> <p>3,20€</p> </li>
                <li> <p>ASSIETTE CAMPUS PRIVILÈGE</p> <p>6,20€</p> </li>
                </div>
                <div>
                <li> <p>MENU RÉVISION RASSASIÉ</p> <p>8€</p> </li>
                <li> <p>FORFAIT STUDIEUX ESSENTIEL</p> <p>7€</p> </li>
                <li> <p>MENU ÉTUDIANT ÉCONOMIQUE</p> <p>2,50€</p> </li>
                </div>
            </ul>
        </div>
    </section>




<?php
include ("footer.php");
?>

<!-- CDN iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

 <!-- Lien script js -->
<script src="script.js"></script>
</body>

</html>