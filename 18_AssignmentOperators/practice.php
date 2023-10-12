<?php
	
	// Constants
	define('TITLE', 'Assignment Operators');
	
	// Custom Variables
	$my_name = 'Mogaya';
	$lesson_num = 18;

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
				
				<h3>Addition Assignment Operator <code>+=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a += $b;

					echo $a;
				?>
				
				<h3>Subtraction Assignment Operator <code>-=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a -= $b;

					echo $a;
				?>
				
				<h3>Multiplication Assignment Operator <code>*=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a *= $b;

					echo $a;
				?>
				
				<h3>Division Assignment Operator <code>/=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a /= $b;

					echo $a;
				?>
				
				<h3>Modulus Assignment Operator <code>%=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a %= $b;

					echo $a;
				?>
				
				<h3>Concatenation Assignment Operator <code>.=</code></h3>
				<?php
					$a = 'Hola ';
					$b = 'Mi Amigos';
					$a .= $b;

					echo $a;
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
