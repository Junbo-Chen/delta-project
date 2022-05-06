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
		session_start();
		require_once 'backend/conn.php';
        $query = "SELECT * FROM product";
        $statement = $conn->prepare($query);
        $statement->execute();
        $items = $statement->fetchAll(PDO::FETCH_ASSOC);
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
	    <div class="box2">
		<form action="backend/productController.php" method="POST">
			<input type="hidden" name="action" value="add">
	        	<div class="box3">
		        	<label>broek</label>
		        	<label>€10</label>
	    			<input type="hidden" name="name"value="broek">
	    			<input type="hidden" name="price"value="10">
	    			<input type="number" name="quantity" id="quantity"value="1">
	    			<input type="submit" value="add to cart">
	    		</div>		
    	</form>
    	<form action="backend/productController.php" method="POST">
			<input type="hidden" name="action" value="add">
	        	<div class="box3">
		        	<label>t-shirt</label>
		        	<label>€10</label>
	    			<input type="hidden" name="name"value="t-shirt">
	    			<input type="hidden" name="price"value="10">
	    			<input type="number" name="quantity" id="quantity"value="1">
	    			<input type="submit" value="add to cart">
	    		</div>		
    	</form>
    	<form action="backend/productController.php" method="POST">
			<input type="hidden" name="action" value="add">
	        	<div class="box3">
		        	<label>schoen</label>
		        	<label>€100</label>
	    			<input type="hidden" name="name"value="schoen">
	    			<input type="hidden" name="price"value="100">
	    			<input type="number" name="quantity" id="quantity"value="1">
	    			<input type="submit" value="add to cart">
	    		</div>		
    	</form>
    	<form action="backend/productController.php" method="POST">
			<input type="hidden" name="action" value="add">
	        	<div class="box3">
		        	<label>siraden</label>
		        	<label>€51080</label>
	    			<input type="hidden" name="name"value="siraden">
	    			<input type="hidden" name="price"value="51080">
	    			<input type="number" name="quantity" id="quantity"value="1">
	    			<input type="submit" value="add to cart">
	    		</div>		
    	</form>

    	 </div>
	</div>	
</body>
<?php 
require_once("footer.php");
?>
</html>