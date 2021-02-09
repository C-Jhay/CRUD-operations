<?php

$mysqli = new mysqli('localhost', 'root', '123', 'crud');
$name = '';
if(isset($_POST['save'])){
	$name = $_POST['name'];
	$mysqli->query("INSERT INTO product (productname) VALUES('$name')");
	$SESSION['msg_type'] = "success";
	header ("location: index.php");
}

if(isset($_GET['delete'])){
	$list = $_GET['delete'];
	$mysqli->query("DELETE FROM product WHERE list=$list");
	$SESSION['msg_type'] = "danger";
	header ("location: index.php");
}
if(isset($_GET['update'])){
	$list = $_GET['update'];
	$result = $mysqli->query("SELECT * FROM product WHERE list=$list");
		$row = $result->fetch_array();
		$name = $row['productname'];
}