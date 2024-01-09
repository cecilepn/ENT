<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENT - Messagerie </title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="./css/messagerie.css">
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

        <div class="left">

            <div class="top">
                <h1>Messages</h1> <iconify-icon icon="jam:write" width="32" height="32"></iconify-icon>
            </div>

            <div class="conv select">
            <iconify-icon icon="iconoir:profile-circle" width="70"></iconify-icon>
                <div class="text">
                    <h2>@utilisateur1</h2>
                    <p>Vous a envoyé un message. 2j</p>
                </div>

            </div>


            <div class="conv">
            <iconify-icon icon="iconoir:profile-circle" width="70"></iconify-icon>
                <div class="text">
                    <h2>@utilisateur2</h2>
                    <p>Vous a envoyé un message. 2j</p>
                </div>

            </div>

            <div class="conv">
            <iconify-icon icon="iconoir:profile-circle" width="70"></iconify-icon>
                <div class="text">
                    <h2>@utilisateur3</h2>
                    <p>Vous a envoyé un message. 2j</p>
                </div>
            </div>

            <div class="conv">
            <iconify-icon icon="iconoir:profile-circle" width="70"></iconify-icon>
                <div class="text">
                    <h2>@utilisateur4</h2>
                    <p>Vous a envoyé un message. 2j</p>
                </div>
            </div>

            <div class="conv">
            <iconify-icon icon="iconoir:profile-circle" width="70"></iconify-icon>
                <div class="text">
                    <h2>@utilisateur5</h2>
                    <p>Vous a envoyé un message. 2j</p>
                </div>
            </div>

            <div class="conv">
            <iconify-icon icon="iconoir:profile-circle" width="70"></iconify-icon>
                <div class="text">
                    <h2>@utilisateur6</h2>
                    <p>Vous a envoyé un message. 2j</p>
                </div>
            </div>


        </div>

        <hr>

        <div class="right">

            <div class="conversation">
                <div class="correspondant">
                <iconify-icon icon="iconoir:profile-circle" width="70"></iconify-icon>

                    <div>
                        <h3> Nom Prénom </h3>
                        <p>adresse mail</p>
                    </div>
                </div>

                <div class="date">
                    <hr>
                    <p> 10 Janvier 2023 </p>
                    <hr>
                </div>


                <div class="discussion">

                    <div class="blocMessage">
                        <p class="messageLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nulla
                            laudantium dolorem

                            maiores nostrum nobis ipsum laborum recusandae?</p>
                        <p class="heure">07:15</p>
                    </div>


                    <div class="blocMessage">
                        <p class="messageRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nulla
                            laudantium dolorem
                            necessitatibus </p>
                        <p class="heureright">07:45</p>
                    </div>


                    <div class="blocMessage">
                        <p class="messageLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nulla
                            laudantium dolorem
                            necessitatibus similique exercitationem inventore a aliquid, architecto eum itaque odit non
                            eius
                            maiores nostrum nobis ipsum laborum recusandae?</p>
                        <p class="heure">10:15</p>
                    </div>
                </div>

                <div class="blocMessage">
                    <p class="messageRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nulla
                        laudantium dolorem
                        necessit?</p>
                    <p class="heureright">13:15</p>
                </div>

            </div>

            <div class="bloc">

                <div class="write">
                    <iconify-icon icon="iconamoon:link-thin" width="32" height="32"></iconify-icon>
                    <p>Taper votre message...</p>
                </div>

                <div class="send">
                    <iconify-icon icon="lets-icons:message" width="32" height="32" class="msgbloc"></iconify-icon>
                </div>
            </div>
        </div>

    </section>

<script src="script.js"></script>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>