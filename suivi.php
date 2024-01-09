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

include ("header.php");
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
            <div class="row">
                <div class="left">
                    <img src="img/prof1.jpg" alt="">
                    <div class="text">
                        <p>Mar. 8 Janvier 15h45 à 17h45</p>
                        <p>Absence du cours de M.Leroy </p>
                    </div>

                </div>

                <div class="heure">
                    <p>2h</p>
                </div>

                <div class="btn">
                    <a href=""> Ajouter </a>
                    <a href=""> Modifier </a>
                </div>
            </div>


            <hr>
            <div class="row">
                <div class="left">
                    <img src="img/prof2.jpg" alt="">
                    <div class="text">
                        <p>Mar. 8 Janvier 15h45 à 17h45</p>
                        <p>Absence du cours de M.Leroy </p>
                    </div>

                </div>

                <div class="heure">
                    <p>2h</p>
                </div>

                <div class="btn">
                    <a href=""> Ajouter </a>
                    <a href=""> Modifier </a>
                </div>
            </div>


            <hr>
            <div class="row">
                <div class="left">
                    <img src="img/prof3.jpg" alt="">
                    <div class="text">
                        <p>Mar. 8 Janvier 15h45 à 17h45</p>
                        <p>Absence du cours de M.Leroy </p>
                    </div>

                </div>

                <div class="heure">
                    <p>2h</p>
                </div>

                <div class="btn">
                    <a href=""> Ajouter </a>
                    <a href=""> Modifier </a>
                </div>
            </div>


        </div>

    </section>

    <section class="notes">

        <div>
            <h1>Mes Notes</h1>
            <h2>Notes les plus récentes </h2>
        </div>

        <div class="containerNotes">

            <div class="blocNote">
                <div class="note">12/20</div>
                <div class="desc">
                    <h3>Nom du contrôle</h3>
                    <div class="descNote">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia ut nostrum ipsum perferendis
                            reiciendis eveniet, quas labore enim. Aut sequi doloribus eum maxime maiores iusto eaque
                            molestias commodi fugit sit!</p>
                        <p>Ressources 2.01, M.leroy </p>
                    </div>
                </div>

            </div>

            <div class="blocNote">
                <div class="note">12/20</div>
                <div class="desc">
                    <h3>Nom du contrôle</h3>
                    <div class="descNote">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia ut nostrum ipsum perferendis
                            reiciendis eveniet, quas labore enim. Aut sequi doloribus eum maxime maiores iusto eaque
                            molestias commodi fugit sit!</p>
                        <p>Ressources 2.01, M.leroy </p>
                    </div>
                </div>

            </div>

            <div class="blocNote">
                <div class="note">12/20</div>
                <div class="desc">
                    <h3>Nom du contrôle</h3>
                    <div class="descNote">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia ut nostrum ipsum perferendis
                            reiciendis eveniet, quas labore enim. Aut sequi doloribus eum maxime maiores iusto eaque
                            molestias commodi fugit sit!</p>
                        <p>Ressources 2.01, M.leroy </p>
                    </div>
                </div>

            </div>

            <div class="blocNote">
                <div class="note">12/20</div>
                <div class="desc">
                    <h3>Nom du contrôle</h3>
                    <div class="descNote">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia ut nostrum ipsum perferendis
                            reiciendis eveniet, quas labore enim. Aut sequi doloribus eum maxime maiores iusto eaque
                            molestias commodi fugit sit!</p>
                        <p>Ressources 2.01, M.leroy </p>
                    </div>
                </div>

            </div>

            <div class="blocNote">
                <div class="note">12/20</div>
                <div class="desc">
                    <h3>Nom du contrôle</h3>
                    <div class="descNote">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia ut nostrum ipsum perferendis
                            reiciendis eveniet, quas labore enim. Aut sequi doloribus eum maxime maiores iusto eaque
                            molestias commodi fugit sit!</p>
                        <p>Ressources 2.01, M.leroy </p>
                    </div>
                </div>

            </div>

            <div class="blocNote">
                <div class="note">12/20</div>
                <div class="desc">
                    <h3>Nom du contrôle</h3>
                    <div class="descNote">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia ut nostrum ipsum perferendis
                            reiciendis eveniet, quas labore enim. Aut sequi doloribus eum maxime maiores iusto eaque
                            molestias commodi fugit sit!</p>
                        <p>Ressources 2.01, M.leroy </p>
                    </div>
                </div>

            </div>


        </div>


        <div class="slider"><img src="img/slider.png" alt=""></div>

        <hr>

        <div class="recap">

            <div class="doc">
                <p>Mon relevé de notes</p>
                <a href=""> Télécharger </a>
            </div>

            <div class="moyenne">
                <p>Moyenne générale : <span> 15/20 </span></p>
            </div>
        </div>
    </section>


    <?php
include ("footer.php");
?>

<script src="script.js"></script>


</body>

</html>