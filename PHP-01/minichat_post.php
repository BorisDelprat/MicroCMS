<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'colyne34');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO minichat(id, nom, message, datem) VALUES(:id, :nom, :message, :datem)');
	$req->execute(array(
		':id' => $_GET['id'],
		':nom' => htmlspecialchars($_POST['nom']),
		':message' => htmlspecialchars($_POST['message']),
		':datem' => htmlspecialchars($_POST['datem']),
	));

	if(isset($_POST['nom'])){
		$nom = stripslashes($_POST['nom']);
		setcookie('nom', $nom, time() + 365*24*3600, null, null, false, true);
	}

		header('Location: minichat.php');

	echo "Message ajouté."

?>