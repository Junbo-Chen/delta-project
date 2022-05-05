<?php
session_start();
$action = $_POST['action'];
$ID = $_GET['ID'];
if($action == "add"){
	require_once 'conn.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_['description'];
}
?>