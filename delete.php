<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Taak verwijderd!</h1>
        <a href="index.php">Klik hier om terug naar het overzicht te gaan</a>

        <?php
        //Haal id uit de URL
        $id = $_GET['id'];

        //Voer query uit
        require_once 'backend/conn.php';
        $query = "DELETE FROM `order` WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":id" => $id
        ]);
        $item = $statement->fetch(PDO::FETCH_ASSOC);

        ?>
</body>
</html>