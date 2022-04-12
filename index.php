<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
		<?php require_once 'head.php'?>
		<h1>welkom bij onze website</h1>
		<table width="100%">
			<tr>
				<td><img src="img/broek.jpg" width="250px"></td>
				<td><img src="img/t-shirt.webp" width="250px"></td>
				<td><img src="img/schoen..jpg"width="250px"></td>
				<td><img src="img/siraden.webp" width="250px"></td>
			</tr>
			<td><p>broek</p><br><p>prijs: €10</p><p><a href="add.php">kopen</a></p></td>
			<td><p>t-shirt</p><br><p>prijs: €10</p><p><a href="add.php">kopen</a></p></td>
			<td><p>schoen</p><br><p>prijs: €120</p><p><a href="add.php">kopen</a></p></td>
			<td><p>siraden</p><br><p>prijs: €58000</p><p><a href="add.php">kopen</a></p></td>
		</table>

	</div>	
</body>
<?php 
require_once("footer.php")
?>
</html>