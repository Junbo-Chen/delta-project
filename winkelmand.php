
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
    <script src="https://kit.fontawesome.com/d3d397664f.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php   
        session_start();     
        require_once 'backend/conn.php';
        $query = "SELECT * FROM `order`";
        $statement = $conn->prepare($query);
        $statement->execute();
        $items = $statement->fetchALL(PDO::FETCH_ASSOC);
    ?>
    <div class="wrapper">
        <?php require_once 'head.php'?>
        <?php 
     if(!isset($_SESSION['user_id']))
    {
    $msg = "je+moet+eerst+inloggen!";
    header("location: inlog.php?msg=$msg");
    exit;
    }
    ?>
        <table>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>
                <th>total</th>
                <th>verwijderen</th>
            </tr>   
            <?php 
            $productPrijs = 0;
            foreach ($items as $i): {
                ?>
                <?php 
                    $productPrijs = $i['quantity']*$i["price"];
                }
                ?>
                <tr> 
                <td><?php echo $i["name"];?></td>
                <td>prijs €<?php echo $i["price"]?></td>
                <td>aantal: <?php echo $i['quantity']?></td>
                <td><?php echo number_format($productPrijs, 2)?></td>
                <td><a href="delete.php?id=<?php echo $i['id']?>"><i class="fa-regular fa-trash-can"></i></a>
                </td>                
                </tr>
            <?php endforeach ?> 

        </table>
        <a href="betalen.php">betalen</a>
    </div>

</body>
</html>