<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="backoffice.css">
    <title>Backoffice - Utilisateurs </title>
    <link rel="icon" type="image/png" href="../img/logo.png" />
</head>

<body>

    <?php

    include("../db_connect.php");
    session_start();

    if (isset($_SESSION["role"])) {
        if ($_SESSION["role"] == "1") {

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
            role ON utilisateur.ext_role = role.id_role";

            $stmt = $db->prepare($requete);
            $stmt->execute();
            $allUtilisateurs = $stmt->fetchall(PDO::FETCH_ASSOC);
            // execute all verifications & get all data from database

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

        <div class="boContainer">
            <h1>Utilisateurs</h1>

            <div class="boWrapper">

                <table>

                    <thead>
                        <tr>
                            <th>Image de profile</th>
                            <th>Informations</th>
                            <th>Role</th>
                            <th>Tools</th>
                        </tr>
                    </thead>

                    <tbody>


                        <?php

                        if (isset($_SESSION["role"])) {

                            foreach ($allUtilisateurs as $utilisateur) {
                                echo "<tr>";
                                echo "<td><img class='profilePicture' src='{$utilisateur["img_profile"]}' alt='Profile Picture'></td>";
                                echo "<td>";
                                echo "<div class='infoWrapper'>";
                                echo "<div> {$utilisateur["nom"]} {$utilisateur["prenom"]} </div>";
                                echo "<div> <span> {$utilisateur["promo"]} - TP{$utilisateur["nom_tp"]} </span></div>";
                                echo "</div>";
                                echo "</td>";
                                echo "<td>{$utilisateur["nom_role"]}</td>";
                                echo "<td>";
                                echo "<form class='toolsWrapper' action='redirectBack.php' method='post'>";
                                echo "<input type='hidden' name='id' value='{$utilisateur["id_user"]}'>";
                                echo "<button class='buttonTools buttonEdit' type='submit' name='action' value='edit'>";
                                echo "<iconify-icon icon='jam:write' width='32' height='32'>";
                                echo "</button>";
                                echo "<button class='buttonTools buttonDelete' type='submit' name='action' value='delete'>";
                                echo "<iconify-icon icon='mingcute:delete-fill' width='32' height='32'></iconify-icon>";
                                echo "</button>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        }

                        ?>

                    </tbody>

                </table>

            </div>

            
            <form class="boAddForm" action="redirectBack.php" method="post">
                <button class="boAddButton" type="submit" name="action" value="add">
                    +
                </button>
            </form>

        </div>

    </section>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>

</html>