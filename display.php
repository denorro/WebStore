<!DOCTYPE html>
	<?php include 'partials/scripts_styles.php'; ?>
	<?php include 'partials/nav_bar.php'; ?>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>Welcome <?php echo $_POST["name"]; ?></h1>
				<h2>E-Mail: <?php echo $_POST["email"]; ?></h1>
			</div>
		</div>
	</body>
</html>