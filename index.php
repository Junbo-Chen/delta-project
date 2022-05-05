<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
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

	</div>	
</body>
<?php 
require_once("footer.php")
?>
</html>