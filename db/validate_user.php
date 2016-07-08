<html>
<head></head>
<body>
	

<?php
    
	$connection = mysqli_connect("localhost:3306", "root", "admin", "shopping")
				  or die ( "Please check connection!");
	
	$query = "select email_address, password, complete_name from customers where
				email_address like '" . $_POST['email'] . "' " . 
				" and password like (PASSWORD('". $_POST['password'] ."'))";
				
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));	
	
	if(mysqli_num_rows($result) == 1){
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			extract($row);
			echo "Welcome " . $complete_name . "to Denorro's Store! <br>";
		}
	}
	else{
		?>
		<p>Invalid email address and/or password<br>
			Not Registered?
			<a href="../signup.php">Click Here</a> to register.<br><br><br>
			Want to try again?<br>
			<a href="../signin.php">Click Here</a> to try login again.<br>
		</p>
		<?php
	}
		?>		
</body>
</html>