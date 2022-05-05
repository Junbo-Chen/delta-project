<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
</head>
<body>
	<?php        
        //Voer query uit
        require_once 'backend/conn.php';
        $query = "SELECT * FROM product";
        $statement = $conn->prepare($query);
        $statement->execute();
        $items = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="wrapper">
        <?php require_once 'head.php'?>
    </div>

</body>
</html>