<html>
	<?php include 'partials/scripts_styles.php' ?>
	
	<body>
		<?php include 'partials/nav_bar.php' ?>
		<br>
		<div class="container">
			<div class="well">
			<form action="db/send_email.php" method="post">
			  <fieldset>
			  	<legend>Contact Us</legend>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="email" placeholder=" Your Email..." required="required"/>
			  		<span id="emailmsg"></span>
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="name" placeholder="Full Name..." required="required"/>
			  		<span id="usermsg"></span>
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="" name="phone" placeholder="Phone Number..." required="required"/>
			  	</div>
			  	<div class="form-group">
			  		<textarea class="form-control" rows="10" name="msg" placeholder="Enter Message..." required="required"></textarea> 
			  	</div>
			  	<button class="btn btn-lg btn-success" type="submit">Submit</button>
  				<button class="btn btn-lg btn-danger" type="reset">Reset</button>
			  </fieldset>
			</form>
			</div>
		</div>
	</body>
</html>