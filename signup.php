<html>
	<?php include 'partials/scripts_styles.php' ?>
	
	<body>
		<?php include 'partials/nav_bar.php' ?>
		<br>
		<div class="container">
			<form action="db/add_customer.php" method="post" onsubmit="return validate(this);">
			  <fieldset>
			  	<legend>Sign Up</legend>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="email" placeholder="Email..." required="required"/>
			  		<span id="emailmsg"></span>
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="password" name="password" placeholder="Password..." required="required"/>
			  		<span id="passwordmsg"></span>
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="password" name="repassword" placeholder="Confirm Password..." required="required"/>
			  		<span id="repasswordmsg"></span>
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="name" placeholder="Full Name..." required="required"/>
			  		<span id="usermsg"></span>
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="address1" placeholder="Address 1..." />
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="address2" placeholder="Address 2..." />
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="city" placeholder="City..." />
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="state" placeholder="State..." />
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="country" placeholder="Country..." />
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="zip" placeholder="Zip Code..." />
			  	</div>
			  	<div class="form-group">
			  		<input class="form-control" type="text" name="phone" placeholder="Phone Number..." />
			  	</div>
			  	<button class="btn btn-success" type="submit">Submit</button>
  				<button class="btn btn-danger" type="reset">Reset</button>
			  </fieldset>
			</form>
		</div>
		<script>
			function validate(userForm) {

				div = document.getElementById("emailmsg");
				// #1
				div.style.color = "red";
				// #2
				if (div.hasChildNodes())// #3
				{
					div.removeChild(div.firstChild);
					// #4
				}
				regex = /(^\w+\@\w+\.\w+)/;
				// #5
				match = regex.exec(userForm.emailaddress.value);
				if (!match) {
					div.appendChild(document.createTextNode("Invalid Email Format!"));
					// #6
					userForm.emailaddress.focus();
					// #7
					return false;
					// #8
				}
				div = document.getElementById("passwordmsg");
				div.style.color = "red";
				if (div.hasChildNodes()) {
					div.removeChild(div.firstChild);
				}
				if (userForm.password.value.length <= 5)// #9
				{
					div.appendChild(document.createTextNode("The password should be of at least size 6"));
					userForm.password.focus();
					return false;
				}
				div = document.getElementById("repasswordmsg");
				div.style.color = "red";
				if (div.hasChildNodes()) {
					div.removeChild(div.firstChild);
				}
				if (userForm.password.value != userForm.repassword.value)// #10
				{
					div.appendChild(document.createTextNode("The two passwords don’t match"));
					userForm.password.focus();
					return false;
				}
				var div = document.getElementById("usermsg");
				div.style.color = "red";
				if (div.hasChildNodes()) {
					div.removeChild(div.firstChild);
				}
				if (userForm.complete_name.value.length == 0)// #11
				{
					div.appendChild(document.createTextNode("Name cannot be blank"));
					userForm.complete_name.focus();
					return false;
				}
				return true;
			}
		</script>
	</body>
</html>