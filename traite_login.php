<?php
session_start();

include ("db_connect.php");

$db->query('SET NAMES utf8');

$requete="SELECT * FROM utilisateur WHERE login=:login";
$stmt=$db->prepare($requete);
$stmt->bindParam(':login',$_GET["mail"], PDO::PARAM_STR);
$stmt->execute();


if ($stmt->rowcount()==1){
	$result=$stmt->fetch(PDO::FETCH_ASSOC);

	if (password_verify($_GET["password"],$result["mdp"])){
		$_SESSION["login"]=$_GET["mail"];
		$_SESSION["mdp"]=$_GET["password"];
		$_SESSION["id"]=$result["id_user"];
		$_SESSION["prenom"]=$result["prenom"];
		$_SESSION["nom"]=$result["nom"];
		$_SESSION["tel"]=$result["tel"];
		$_SESSION["adresse"]=$result["adresse"];
		$_SESSION["img_profile"]=$result["img_profile"];

		
     header ('Location:index.php');
	} else {header ('Location:connexion.php?err=mdp');}

 } else {header ('Location:connexion.php?err=login');}

?>

