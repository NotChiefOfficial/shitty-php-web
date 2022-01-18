<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>PHP main</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <?php 
			$header = require "blocks/header.php";
			$header.make_header("error");
		?>

    <div class="container mt-5">
			<h3 class="mt-5 border-top">Sorry, this page seems not to exist. Error 404!</h3>
    </div>

    <?php require "blocks/footer.php"?>
  </body>
</html>