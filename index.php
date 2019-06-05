<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
		$query = mysqli_query($connect, 'SELECT * FROM gameshop');
	?>
	<form method="POST" action="addgame.php" enctype="multipart/form-data">
		<h4>Add game:</h4>
		<input type="" name="name" placeholder="name">

		<input type="" name="price" placeholder="price">

		<input type="file" name="img">
		<button>Press</button>
	</form>
	<div class="row bg-light">
		<?php for($i = 0; $i < $query->num_rows; $i++){ ?>
		<?php $logo = $query->fetch_assoc();
		echo '<div class="col-2 bg-secondary p-4">
			<h4>' . $logo['name'] . '</h4>
			<h4>' . $logo['price'] . '</h4>
			<img class="col-12"src="' . $logo['img'] . '">
		</div>'; 
		?>
		<form method="POST" action="delete.php">
			<?php echo '<button name="id" value="' . $logo['id'] . '">Delete</button>'; ?>
		</form>

		<form method="POST" action="admin_update.php">
			<?php echo '<button name="id" value="' . $logo['id'] . '">Edit</button>'; ?>
		</form>
		

	<?php } ?>
	</div>
</body>
</html>