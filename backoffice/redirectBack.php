<?php

session_start();
if (isset($_POST["action"])) {
    switch ($_POST["action"]) {
        case "edit":
            header("Location:editForm.php?id=" . $_POST["id"]);
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
            header("Location:addForm.php");
            break;
        default:
            header("Location:backoffice.php");
            break;
    }
}

?>