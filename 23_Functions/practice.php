<?php
	
	// Constants
	define("TITLE", "Intro to Functions");
	
	// Custom Variables
	$myName	= "Mogaya";
	$lessonNum	= 23;
	
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
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Using <code>sort()</code></h3>
				<?php
					
					$brands = array("Toyota", "Isuzu", "Mazda", "Audi", "Mercedes");

					sort($brands);

					foreach($brands as $brand){
						echo "$brand <br>";
					}
					
				?>
				
				<h3>Using <code>rsort()</code></h3>
				<?php
					
					rsort($brands);

					foreach ($brands as $brand){
						echo "$brand <br>";
					}
					
				?>
				
				<h3>Using <code>strtolower()</code></h3>
				<?php
					
					$text = "QWERTY";
					$text = strtolower($text);

					echo "$text";
					
				?>
				
				<h3>Using <code>sha1()</code></h3>
				<?php
					
					$password = "MyPassword";
					echo "Before: $password <br>";

					$password = sha1($password);
					echo "After: $password";
					
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
