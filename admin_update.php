<!DOCTYPE html>
<html>
<head>
	<title>Edit game</title>
</head>
<body>
	<div>
		<form method="POST" action="change.php" enctype="multipart/form-data">
			<?php echo '<input type="hidden" name="id" value="' . $_POST['id'] . '" class="form-control">'; ?>

			<?php echo '<input type="" placeholder="name" name="name" value="' . $_POST['name'] . '" class="form-control">'; ?>

			<?php echo '<input type="" placeholder="price" name="price" value="' . $_POST['price'] . '" class="form-control">'; ?>

			<?php echo '<input type="file" name="img">'; ?>
			<button class="btn btn-warning">Edit</button>
		</form>
	</div>

</body>
</html>