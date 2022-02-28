<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
	<?php include 'header.php'; ?>
	<div id="main">
		<div id="header">
				<?php
				foreach ($prod as $key_pro) {
				?>
				<form action="" method="POST">
					<div id="product-<?php echo $key_pro["id"]; ?>" class="product">
						<img src="<?php echo "images/" . $key_pro["image"]; ?>">
						<h2 class="title">Product <?php echo $key_pro["id"]; ?></h2>
						<span>Price: <?php echo $key_pro["price"]; ?>$</span>
						<input type="submit" name="submit" data-id="<?php echo $key_pro["id"]; ?>" class="add-to-cart" value="Add to Cart">
					</div>
					</form>
				<?php
				}
				?>
		</div>
		<div id="table">
		</div>
	</div>
	<?php include 'footer.php'; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
</body>
</html>