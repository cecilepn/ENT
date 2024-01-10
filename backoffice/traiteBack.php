<?php

session_start();
include("../db_connect.php");

if (isset($_POST["action"])) {
    switch ($_POST["action"]) {
        case "edit":

            // Initialisation du hash
            $hash = null;

            // Si password n'est pas vide, alors hacher le password
            if (!empty($_POST["password"])) {
                $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
            }

            $query = "UPDATE utilisateur SET user_login = :mail, ";

            // Ajouter le champ password_user uniquement si $password n'est pas vide
            if (!empty($_POST["password"])) {
                $query = $query . "mdp = :password, ";
            }

            $query = $query . "prenom = :prenom, nom = :nom, img_profile = :img, tel = :tel, adresse = :adresse, ext_role = :role, ext_annee = :annee, ext_tp = :tp WHERE id_user = :id";

            $stmt = $db->prepare($query);
            $stmt->bindParam(':mail', $_POST["editEmail"], PDO::PARAM_STR);

            // Ajouter le bind pour le mot de passe uniquement si $password n'est pas vide
            if (!empty($_POST["password"])) {
                $stmt->bindValue(":password", $hash, PDO::PARAM_STR);
            }

            $stmt->bindParam(':prenom', $_POST["editPrenom"], PDO::PARAM_STR);
            $stmt->bindParam(':nom', $_POST["editNom"], PDO::PARAM_STR);
            $stmt->bindParam(':img', $_POST["editPhoto"], PDO::PARAM_STR);
            $stmt->bindParam(':tel', $_POST["editTel"], PDO::PARAM_STR);
            $stmt->bindParam(':adresse', $_POST["editAdresse"], PDO::PARAM_STR);
            $stmt->bindParam(':role', $_POST["editRole"], PDO::PARAM_INT);
            $stmt->bindParam(':annee', $_POST["editPromo"], PDO::PARAM_INT);
            $stmt->bindParam(':tp', $_POST["editTP"], PDO::PARAM_INT);
            $stmt->bindParam(':id', $_POST["id"], PDO::PARAM_INT);

            $stmt->execute();

            header("Location:backoffice.php");

            break;

        case "delete":
            include("../db_connect.php");
            $requete = "DELETE FROM utilisateur WHERE id_user=:id";
            $stmt = $db->prepare($requete);
            $stmt->bindParam(':id', $_POST["id"], PDO::PARAM_INT);
            $stmt->execute();
            header("Location:backoffice.php");
            break;

        case "add":

            $hash = password_hash($_POST["addPassword"], PASSWORD_DEFAULT);

            $query = "INSERT INTO utilisateur (user_login, mdp, prenom, nom, img_profile, numEtu, tel, adresse, ext_role, ext_annee, ext_tp) VALUES (:mail, :pssword, :prenom, :nom, :img, :numEtu, :tel, :adresse, :roles, :annee, :tp)";

            $stmt = $db->prepare($query);
            $stmt->bindParam(':mail', $_POST["addEmail"], PDO::PARAM_STR);
            $stmt->bindParam(':pssword', $hash, PDO::PARAM_STR);
            $stmt->bindParam(':prenom', $_POST["addPrenom"], PDO::PARAM_STR);
            $stmt->bindParam(':nom', $_POST["addNom"], PDO::PARAM_STR);
            $stmt->bindParam(':img', $_POST["addPhoto"], PDO::PARAM_STR);
            $stmt->bindParam(':numEtu', $_POST["addNumEtu"], PDO::PARAM_STR);
            $stmt->bindParam(':tel', $_POST["addTel"], PDO::PARAM_STR);
            $stmt->bindParam(':adresse', $_POST["addAdresse"], PDO::PARAM_STR);
            $stmt->bindParam(':roles', $_POST["addRole"], PDO::PARAM_INT);
            $stmt->bindParam(':annee', $_POST["addPromo"], PDO::PARAM_INT);
            $stmt->bindParam(':tp', $_POST["addTP"], PDO::PARAM_INT);

            $stmt->execute();

            header("Location:backoffice.php");
            break;
        default:
            header("Location:backoffice.php");
            break;
    }
}
