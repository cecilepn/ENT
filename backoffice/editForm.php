<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="backoffice.css">
    <title>Document</title>
</head>

<body>

    <?php

    include("../db_connect.php");
    session_start();

    if (isset($_SESSION["role"])) {
        if ($_SESSION["role"] == "1") {

            // Récupération des données de l'utilisateur à modifier
            $requete = "SELECT
            utilisateur.*,
            tp.nom_tp,
            annee.promo,
            role.nom_role
        FROM
            utilisateur
        JOIN
            tp ON utilisateur.ext_tp = tp.id_tp
        JOIN
            annee ON utilisateur.ext_annee = annee.id_annee
        JOIN
            role ON utilisateur.ext_role = role.id_role
        WHERE
            id_user=:id
            ";

            $stmt = $db->prepare($requete);
            $stmt->bindParam(':id', $_GET["id"], PDO::PARAM_INT);
            $stmt->execute();
            $editUtilisateur = $stmt->fetchall(PDO::FETCH_ASSOC);

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

        <form id="editForm" action="traiteBack.php" method="POST">

            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?php echo $editUtilisateur[0]['id_user']; ?>">

            <div class="boFormInput">
                <label for="editEmail">Login :</label>
                <input type="email" id="editEmail" name="editEmail" value="<?php echo $editUtilisateur[0]['user_login']; ?>" required>
            </div>

            <div class="boFormRow">
                <div class="boFormInput">
                    <label for="editPrenom">Prenom :</label>
                    <input type="text" id="editPrenom" name="editPrenom" value="<?php echo $editUtilisateur[0]['prenom']; ?>" required>
                </div>

                <div class="boFormInput">
                    <label for="editNom">Nom :</label>
                    <input type="text" id="editNom" name="editNom" value="<?php echo $editUtilisateur[0]['nom']; ?>" required>
                </div>
            </div>

            <div class="boFormInput">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="boFormInput">
                <label for="editPhoto">Photo de profile :</label>
                <input type="text" id="editPhoto" name="editPhoto" value="<?php echo $editUtilisateur[0]['img_profile']; ?>" required>
            </div>

            <div class="boFormRow">
                <div class="boFormInput">
                    <label for="editTel">Téléphone :</label>
                    <input type="tel" id="editTel" name="editTel" value="<?php echo $editUtilisateur[0]['tel']; ?>" required>
                </div>
                <div class="boFormInput">
                    <label for="editAdresse">Adresse :</label>
                    <input type="text" id="editAdresse" name="editAdresse" value="<?php echo $editUtilisateur[0]['adresse']; ?>" required>
                </div>
            </div>

            <div class="boFormRow">
                <div class="boFormInput">
                    <label for="editRole">Role :</label>
                    <select name="editRole" id="editRole">
                        <?php
                        foreach ($allRole as $role) {
                            echo "<option value='{$role["id_role"]}'";
                            if ($role["id_role"] == $editUtilisateur[0]["ext_role"]) {
                                echo "selected";
                            }

                            echo ">{$role["nom_role"]}</option>";
                        }
                        ?>
                    </select required>
                </div>

                <div class="boFormInput">
                    <label for="editTP">TP :</label>
                    <select name="editTP" id="editTP">
                        <?php
                        foreach ($allTP as $tp) {
                            echo "<option value='{$tp["id_tp"]}'";
                            if ($tp["id_tp"] == $editUtilisateur[0]["ext_tp"]) {
                                echo "selected";
                            }

                            echo ">{$tp["nom_tp"]}</option>";
                        }
                        ?>
                    </select required>
                </div>

                <div class="boFormInput">
                    <label for="editPromo">Promo :</label>
                    <select name="editPromo" id="editPromo">
                        <?php
                        foreach ($allAnnee as $annee) {
                            echo "<option value='{$annee["id_annee"]}'";

                            if ($annee["id_annee"] == $editUtilisateur[0]["ext_annee"]) {
                                echo "selected";
                            }
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