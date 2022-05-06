<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
</head>
<body>
	<div class="wrapper">
		<?php require_once 'head.php'?>
		<h1>inloggen</h1>
	<form action="backend/inlogController.php" method="POST">
		Gebruikersnaam:
		<input type="text" name="uid">
		wachtwoord:
		<input type="text" name="pw">
		<input type="submit" value="Login">
	</form>	
</div>
</body>
</html>