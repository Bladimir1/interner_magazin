<?php  
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, "UPDATE gameshop SET name = '" . $_POST['name'] . "', price = '" . $_POST['price'] . "', img = 'images/" . $_FILES['img']['name'] . "' WHERE id = '" . $_POST['id'] . "'");
	header('Location: http://myserver/46/index.php');
?>