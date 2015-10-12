<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" />
	<title>Minichat</title>

	<style>
		body {
			text-align: center;
			margin:auto;
			paddin:auto;
		}
		label {
			margin-top: 10px;
		}
		textarea {
			min-height: 100px;
			min-width: 200px;
		}
		#der_messages {
			margin-left:35%;
			min-height: 300px;
			width: 600px;
			border: 1px solid black;
		}
	</style>

	<?php
		$dateM= date("j F Y, H:i:s");
	?>

</head>

<body>

<h2>Mini-Chat</h2>

<label for="der_messages">Messages envoyes :</label><br>
<div id="der_messages" name="der_messages">

	<?php

		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'colyne34');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}

		$messages = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 10');

		if(!is_null($messages)){

		while($message = $messages->fetch()) {
			echo $message[datem]." <strong>".$message[nom] . "</strong> : " . $message[message]."<br>";
		}

		$messages->closeCursor();
		}
	?>

</div><br>


<form action="minichat_post.php" method="POST" >

<label for="nom">Nom :</label>
	<input id="nom" name="nom" type="text" required <?php if(isset($_COOKIE['nom'])){ echo 'value="'.$_COOKIE['nom'].'"';} ?>/><br>

<label for="message">Message :</label><br>
	<textarea id="message" name="message" required></textarea><br>

<input id="datem" name ="datem" type="text" value="<?php echo $dateM ?>" hidden>

<input type="submit" name="Envoyer">


</form>

</body>

</html>