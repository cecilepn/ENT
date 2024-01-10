<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="backoffice.css">
    <title>Ajout d'utilisateur</title>
</head>

<body>

    <?php

    include("../db_connect.php");
    session_start();

    if (isset($_SESSION["role"])) {
        if ($_SESSION["role"] == "1") {

            // Récupération des différents champs de la table TP
            $requete = "SELECT * FROM tp";
            $stmt = $db->prepare($requete);
            $stmt->execute();
            $allTP = $stmt->fetchall(PDO::FETCH_ASSOC);

            // Récupération des différents champs de la table Année
            $requete = "SELECT * FROM annee";
            $stmt = $db->prepare($requete);
            $stmt->execute();
            $allAnnee = $stmt->fetchall(PDO::FETCH_ASSOC);

            // Récupération des différents champs de la table Role
            $requete = "SELECT * FROM role";
            $stmt = $db->prepare($requete);
            $stmt->execute();
            $allRole = $stmt->fetchall(PDO::FETCH_ASSOC);

        } else {
            header('Location:../index.php');
        }
    }

    ?>


    <header class="boNav">
        <div class="containNav">
            <nav>
                <a id="item" href="../index.php"> Accueil </a>
            </nav>
        </div>
    </header>

    <section class="boBody">

        <form id="addForm" action="traiteBack.php" method="POST">

            <input type="hidden" name="action" value="add">

            <div class="boFormInput">
                <label for="addEmail">Login :</label>
                <input type="email" id="addEmail" name="addEmail" placeholder="jeanpierre@gmail.com" required>
            </div>

            <div class="boFormRow">
                <div class="boFormInput">
                    <label for="addPrenom">Prenom :</label>
                    <input type="text" id="addPrenom" name="addPrenom" placeholder="Jean" required>
                </div>

                <div class="boFormInput">
                    <label for="addNom">Nom :</label>
                    <input type="text" id="addNom" name="addNom" placeholder="Pierre" required>
                </div>
            </div>

            <div class="boFormInput">
                <label for="addPassword">Password :</label>
                <input type="password" id="addPassword" name="addPassword" placeholder="votre mot de passe super secret" required>
            </div>

            <div class="boFormInput">
                <label for="addPhoto">Photo de profile :</label>
                <input type="text" id="addPhoto" name="addPhoto" placeholder="https://maphotoenligne.fr" required>
            </div>

            <div class="boFormRow">
                <div class="boFormInput">
                    <label for="addNumEtu">Numéro Étudiant:</label>
                    <input type="text" id="addNumEtu" name="addNumEtu" placeholder="Numéro Étudiant">
                </div>
            </div>

            <div class="boFormRow">
                <div class="boFormInput">
                    <label for="addTel">Téléphone :</label>
                    <input type="tel" id="addTel" name="addTel" placeholder="06 78 96 53 42 61">
                </div>
                <div class="boFormInput">
                    <label for="addAdresse">Adresse :</label>
                    <input type="text" id="addAdresse" name="addAdresse" placeholder="32 rue des coquelicots">
                </div>
            </div>

            <div class="boFormRow">
                <div class="boFormInput">
                    <label for="addRole">Role :</label>
                    <select name="addRole" id="addRole">
                        <?php
                        foreach ($allRole as $role) {
                            echo "<option value='{$role["id_role"]}'";
                            echo ">{$role["nom_role"]}</option>";
                        }
                        ?>
                    </select required>
                </div>

                <div class="boFormInput">
                    <label for="addTP">TP :</label>
                    <select name="addTP" id="addTP">
                        <?php
                        foreach ($allTP as $tp) {
                            echo "<option value='{$tp["id_tp"]}'";
                            echo ">{$tp["nom_tp"]}</option>";
                        }
                        ?>
                    </select required>
                </div>

                <div class="boFormInput">
                    <label for="addPromo">Promo :</label>
                    <select name="addPromo" id="addPromo">
                        <?php
                        foreach ($allAnnee as $annee) {
                            echo "<option value='{$annee["id_annee"]}'";
                            echo ">{$annee["promo"]}</option>;";
                        }
                        ?>
                    </select required>
                </div>
            </div>



            <input class="boFormSubmit" type="submit" value="Enregistrer">
        </form>

        <section>

</body>

</html>