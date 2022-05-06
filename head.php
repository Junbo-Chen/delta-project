<?php require_once 'backend/config.php';?>
<header>
	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
	<div class="div1">
		<h1>Winkeltje</h1>
		<img src="img/winkeltje.png" alt="">
	</div>
	<?php 
    if(!isset($_SESSION['user_id'])): ?>
        <a href="inlog.php">Inloggen</a>
    <?php else: ?>   
        <a href="logout.php">Uitloggen</a>
    <?php endif;?>	
	<a href="index.php">Producten</a>
	<a href="winkelmand.php">Winkelmand</a>
</header>