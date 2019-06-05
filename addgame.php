<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, "INSERT INTO gameshop (name, price, img) VALUES ('" . $_POST['name'] . "', '" . $_POST['price'] . "', 'images/" . $_FILES['img']['name'] . "')");
	header('Location: http://myserver/46/index.php');
?>