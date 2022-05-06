<?php
session_start();
$action = $_POST['action'];
if($action == "add"){
	require_once 'conn.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];

	$query="INSERT INTO `order` (name, price, quantity)
			 VALUES (:name, :price, :quantity)";
	$statement=$conn->prepare($query);
	$statement->execute([
		":name" => $name,
		":price" => $price,
		":quantity"=> $quantity,
	]);
	header("Location: ../index.php?msg=product+is+toegevoegt");		  
}else{
	header("Location: ../index.php?msg=er+is+misgegaan");
}
?>