<!DOCTYPE html>
<html>
  <head>
    <?php $pack = require "sources/test.php" ; ?>

    <link rel="stylesheet" href="css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>PHP main</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <?php 
		$header = require "blocks/header.php";
		$pack.make_header(basename(__FILE__, '.php'));
	?>

    <div class="container mt-5">
      <h3 class="mb-3">Hello World</h3>
      <div class="d-flex flex-wrap">
        <?php $pack.make_cards(5); ?>
      </div>
    </div>

    <?php require "blocks/footer.php"?>
  </body>
</html>
