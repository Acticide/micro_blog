<?php
	ini_set("display_errors",0);error_reporting(0);
	require('smarty-3.1.30/libs/Smarty.class.php');
	include('includes/connexion.inc.php');
	
	$smarty = new Smarty();
	$smarty->display("inscription.tpl");
	
		$sql = "INSERT INTO utilisateurs(email,mdp) VALUES (:email,:mdp)";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':email', $_POST['email']);
		$stmt->bindValue(':mdp', $_POST['mdp']);
		$stmt->execute();
?>