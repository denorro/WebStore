<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<!DOCTYPE html>
<?php include 'partials/scripts_styles.php' ?>
<body>
	<?php include 'partials/nav_bar.php' ?>
	<div class="container">
		<br>
		<?php include 'partials/alerts.php' ?>
		<div class="well">
			<form class="form" action="db/validate_user.php" method="post">
				<fieldset>
					<legend>
						User's Information
					</legend>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-Mail...">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password...">
					</div>
					<button class="btn btn-lg btn-success" type="submit">
						Submit
					</button>
					<button class="btn btn-lg btn-danger" type="reset">
						Reset
					</button>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>