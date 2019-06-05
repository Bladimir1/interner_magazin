<meta charset="utf-8">
<form method="POST" action="updatescript.php" enctype="multipart/form-data">
	<?php echo '<input name="name" placeholder="name" value="' . $_POST['name'] . '">'?>
	<?php echo '<input name="price" placeholder="price" value="' . $_POST['price'] . '">'?>
	<?php echo '<input name="img" type="file" value="' . $_FILES['img'] . '">'?>
	<?php echo '<button name="id" value="' . $_POST['id'] . '">Update</button>'; ?>
</form>