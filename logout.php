<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/logo.png" />
    <title>ENT redirection</title>
</head>
<body>
<?php
session_start();
session_destroy();
echo 'Vous avez été déconnecté. Redirection vers la page de connexion...';
?>
<script>

setTimeout(() => {
    window.location="connexion.php";
},1500)

</script>
</body>
</html>

