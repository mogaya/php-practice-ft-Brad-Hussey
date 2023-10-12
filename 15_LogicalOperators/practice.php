<?php
	
	// Constants
	define("TITLE", "Logical Operators");

	
	// Custom Variables
	$my_name = "Mogaya";
	$lesson_num = 15;

	$username = "johnyboy";
	$password = "qwerty";

	$cartTotal = 19.99;
	$couponCode = "DiscountPlease";


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE;?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num;?>: <small><?php echo TITLE;?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>And <code>and</code></h3>
				<?php
					if ($username = "johnyboy" and $password = "qwerty") {

						echo "Correct Login";

					}
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if ($cartTotal > 15 or $couponCode == "DscountPlease") {

						echo "you get a discount";

					}else {

						echo "you dont have a discount";

					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					$ownDog = true;

					if (!$ownDog){
						echo "You do not own a dog";
					}else {
						echo "you own a dog";
					}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if ($username == "johnyboy" && $password == "qwerty") {
						echo "Login info correct";
					} else {
						echo "Wrong login info";
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if ($cartTotal > 15 || $couponCode == "DscountPlease") {

						echo "you get a discount";

					}else {

						echo "you dont have a discount";

					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y');?> - <?php echo $my_name;?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
