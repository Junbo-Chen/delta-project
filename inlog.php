<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
		<?php require_once 'head.php'?>
	</div>
	<h1>inloggen</h1>
	<form action="../backend/webshop.php" method="POST">
		Gebruikersnaam:
		<input type="text" name="uid">
		wachtwoord:
		<input type="text" name="pw">
	</form>	
</body>
</html>