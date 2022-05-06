<?php
session_start();

$username = $_POST['uid'];
$password = $_POST['pw'];

require_once 'conn.php';

$query = "SELECT * FROM user WHERE username = :username";

$statement = $conn->prepare($query);
$statement->execute([":username" => $username]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount() < 1){
	die("Error: account bestaat niet");
}

if(!password_verify($password, $user['password'])){
	die("Error: wachtwoord niet juist");
}

$_SESSION['user_id'] = $user['id'];
header("location: ../index.php");
?>
?>