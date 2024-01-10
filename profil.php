<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENT - Mon Profil </title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="./css/profil.css">
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

        <div class="left">
            <div class="bloc">
                <iconify-icon icon="healthicons:ui-user-profile-outline" width="32" height="32"
                    flip="horizontal"></iconify-icon>
                <p>Informations personnelles </p>
            </div>

            <div class="bloc">
                <iconify-icon icon="ph:bell-bold" width="32" height="32" flip="horizontal"></iconify-icon>
                <p>Notifications</p>
            </div>

            <div class="bloc">
                <iconify-icon icon="tabler:logout" style="color: #e28a6f;" width="32" height="32"
                    flip="horizontal"></iconify-icon>
                <a href="logout.php">Déconnexion</a>
            </div>
        </div>
<?php

    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION["login"])) {
        // Récupérer les informations de l'utilisateur depuis la base de données
        $requete = "SELECT * FROM utilisateur WHERE user_login=:login";
        $stmt = $db->prepare($requete);
        $stmt->bindParam(':login', $_SESSION["login"], PDO::PARAM_STR);
        $stmt->execute();

        // Vérifier si la requête a retourné un résultat
        if ($stmt->rowCount() == 1) {
            $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

            ?>

            <div class='right'>
                <h1> Mes informations personnelles </h1>

                <div class='parametres'>
                    <div class='profil'>
                        <div class="blocPP"><?php if ($utilisateur["img_profile"] !== NULL) { ?>
                <img src="<?php echo $utilisateur["img_profile"]; ?>" alt="" class="pp-profil">
            <?php } else { ?>
              
                    <iconify-icon icon="iconoir:profile-circle" width="70"></iconify-icon> 
            <?php } ?>
            <iconify-icon icon='jam:write' width='32' height='32'></iconify-icon>
                        </div>
                <?php
                // Afficher les informations de l'utilisateur
                echo "<p>{$utilisateur["nom"]} {$utilisateur["prenom"]}</p>"; ?>
                    </div>


            <div class="formContain">
                <form action="" method="">

                    <div class="position">
                        <div class="info">
                            <label>Nom</label>
                             <input type='text' placeholder="<?php echo("{$utilisateur["nom"]}")?>" name="nom">
                        </div>

                        <div class="info">
                            <label>Prénom</label>
                            <input type="text" placeholder="<?php echo("{$utilisateur["prenom"]}")?>" name="prenom">
                        </div>

                        <div class="info">
                            <label>Numéro de téléphone</label>
                            <input type="text" placeholder="<?php echo("{$utilisateur["tel"]}")?>" name="tel">
                        </div>

                     </div>

                    <div class="position">
                        <div class="info">
                            <label>Adresse Mail</label>
                            <input type="text" placeholder="<?php echo("{$utilisateur["user_login"]}")?>" name="mail">
                        </div>

                        <div class="info adresse">
                            <label>Adresse</label>
                            <input type='text' placeholder="<?php echo("{$utilisateur["adresse"]}")?>" name="adresse">
                        </div>
                    </div>

                    <div class="position">
                            <div class="info">
                                <label>Confirmer le mot de passe</label>
                                <input type="password" placeholder="Mot de passe actuel" name="password" required>
                            </div>

                            <div class="info">
                                <label>Modifier le mot de passe</label>
                                <input type="password" placeholder="Nouveau mot de passe" name="pswd" required>
                            </div>

                            <div>
                                <input type="submit" id='submit' value='Enregistrer' class="btn">
                            </div>
                    </div>


                    </form>
                </div>
            </div>

            <?php
        } 
    }; 
?>

            <div>
                <h2>Mes documents </h2>

                <div class="docs">
                    <div class="doc">
                        <p>Mon certificat</p>
                        <a href=""> Télécharger </a>
                    </div>
                    <div class="doc">
                        <p>Mon relevé de notes</p>
                        <a href=""> Télécharger </a>
                    </div>
                </div>
            </div>

            <div><img src="img/qr.png" alt=""></div>

            <div> <a href="" class="btn"> Modifier son profil </a></div>
        </div>


    </section>


    <?php
    include("footer.php");
    ?>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>

</html>
