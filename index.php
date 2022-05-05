<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
	<title>Winkeltje</title>
</head>
<body>
	<?php
		require_once 'backend/conn.php';
        $query = "SELECT * FROM product";
        $statement = $conn->prepare($query);
        $statement->execute();
        $items = $statement->fetchAll(PDO::FETCH_ASSOC);
        if (isset($_POST['add_to_cart'])) {
        	$name = $_POST['name'];
        	$price = $_POST['price'];
        	$stock = 1;
        	$select_order = mysqli_quety("SELECT * from 'order' where name = '$name'");
        	if(mysqli_num_rows($select_order > 0)){
        		$items[] = 'product already';
        	}else{
        		$insert_product = mysqli_query("INSERT INTO 'product'(name, price, stock)
        			VALUES('$name','$price', '$stock'");
        		$items[] = 'added to cart';
        	}
        }
    ?>
	<div class="wrapper">
		<?php require_once 'head.php'?>
		<h1>welkom bij onze website</h1>
		<div class="box">
	            <img src="img/broek.jpg" width="250px">
	            <img src="img/t-shirt.webp" width="250px">
	            <img src="img/schoen.jpg"width="250px">
	            <img src="img/siraden.webp" width="250px">
	    </div>
		<form action="productController.php" method="POST">
	        <div class="box2">
	        	<?php foreach ($items as $i): ?>
	        		<div class="box3">
	        			<h3><?php echo $i["name"];?></h3>
	        			<p>prijs €<?php echo $i["price"]?></p>
	        			<p><?php echo $i["description"]?></p>
	        			<p>aantal: <?php echo $i['stock']?></p>
	        			<input type="hidden" value="<?php echo $i["name"];?>">
	        			<input type="hidden" value="<?php echo $i["price"];?>">
	        			<input type="submit" value="add to cart" name="add_to_cart">
	        		</div>	
	        	<?php endforeach ?>	
	        </div>
    	</form>
		<a href="winkelmand.php"></a>
		<h1>Welkom bij onze website</h1>
		<table width="100%">
			<tr>
				<td><img src="img/broek.jpg" width="250px"></td>
				<td><img src="img/t-shirt.webp" width="250px"></td>
				<td><img src="img/schoen..jpg"width="250px"></td>
				<td><img src="img/siraden.webp" width="250px"></td>
			</tr>
				<td><p>broek</p><p>prijs: €10</p><p><a href="add.php">Toevoegen aan winkelmand</a></p></td>
				<td><p>t-shirt</p><p>prijs: €10</p><p><a href="add.php">Toevoegen aan winkelmand</a></p></td>
				<td><p>schoen</p><p>prijs: €120</p><p><a href="add.php">Toevoegen aan winkelmand</a></p></td>
				<td><p>sieraden</p><p>prijs: €58000</p><p><a href="add.php">Toevoegen aan winkelmand</a></p></td>
	
		</table>

	</div>	
</body>
<?php 
require_once("footer.php")
?>
</html>