<?php

// Constants
define("TITLE", "Cars");

// Custom Variables
$my_name = "Mogaya Mwita";
$lesson_num =6;

// Cars Array
$cars = array("Dodge Challenger", "Jeep Wrangler", "Ford Raptor");

?>

<!DOCTYPE html>
<html>

<head>
	<title><?php echo TITLE; ?></title>
	<link href="../assets/styles.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<a href="/" title="Back to directory" id="logo">
			<img src="../assets/img/logo.png" alt="PHP">
		</a>

		<h1>Lecture <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
		<hr>

		<h2>Your Example</h2>

		<div class="sandbox">

			<h2>Car Types</h2>
			<ul>
				<li><?php echo $cars[0]; ?></li>
				<li><?php echo $cars[1]; ?></li>
				<li><?php echo $cars[2]; ?></li>
			</ul>

		</div><!-- end sandbox -->

		<a href="index.php" class="button">Back to the lecture</a>

		<hr>

		<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
	</div><!-- end wrapper -->

	<div class="copyright-info">
		<?php include('../assets/includes/copyright.php'); ?>
	</div><!-- end copyright-info -->
</body>

</html>