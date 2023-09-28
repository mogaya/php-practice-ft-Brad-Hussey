<?php
	
	// Constants
	define("TITLE", "Comparison Operators");

	
	// Custom Variables
	$my_name = "Mogaya";
	$lesson_num = 14;

	$yearsOnEarth = 25.32;
	$favouriteStringNum = "1";
	$birthCountry = "Canada";


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Equal <code>==</code></h3>
				<?php
					if ($yearsOnEarth = 25.32){
						echo "Your Age is $yearsOnEarth";
					}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					if ($favouriteStringNum === 1){

						echo "Your fav number is an integer";

					}elseif($favouriteStringNum === '1'){

						echo "Your fav number is a string";

					}else {

						echo "Your fav number is different";

					}
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					if ($birthCountry != "Mexico") {
						echo "Excuse me sir you must not be from around here";
					}
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					if ($yearsOnEarth !== "25.32") {

						echo "You are not exactly the string \"$yearsOnEarth\"";

					}else {

						echo "You are exactly the string \"$yearsOnEarth\"";

					}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					if ($lesson_num < 15){
						echo "You haven't quite made it to lesson 15";
					}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if ($lesson_num > 10){
						echo "You've made it past lesson 10";
					}
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					if ($lesson_num <= 14) {
						echo "$lesson_num is less or equal to 14";
					}
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					if ($lesson_num >= 14) {
						echo "$lesson_num is greater or equal to 4";
					}
				?>
				
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
