<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, "DELETE FROM gameshop WHERE id ='" . $_POST['id'] . "'");
 	header('Location: http://myserver/46/index.php');
?>