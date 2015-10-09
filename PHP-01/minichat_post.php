<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, dateheure) VALUES(?, ?, ?)');
	$req->execute(array($_POST['pseudo'], $_POST['message'], $_POST['dateheure']));

	header('Location: minichat.php');

?>