<!DOCTYPE html>
<html>
<head>
		<?php $pack = require "sources/test.php" ; ?>

	<link rel="stylesheet" href="css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Contact us</title>
</head>
<body class="d-flex flex-column min-vh-100">
	<?php 
		$header = require "blocks/header.php";
		$pack.make_header(basename(__FILE__, '.php'));
	?>
		
	<div class="container mt-5">
		<h3 class="mt-5 border-bottom">Contact us</h3>
		<form action="sources/contact.php" method="post">
			<input type="email" name="email" id="email" placeholder="example@gmail.com" class="form-control mb-1">
			<textarea name="message" id="message" placeholder="Input your message" class="form-control mb-1"></textarea>
			<button type="submit" name="send" class="btn btn-success">Send</button>
		</form>
	</div>

	<?php require "blocks/footer.php"?>

</body>
</html>