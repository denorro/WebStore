<?php
   
	$connection = mysqli_connect("localhost:3306", "root", "admin", "shopping")
				  or die ( "Please check server connection!");
				  
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$name = $_POST['name'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];

	 $query = "INSERT INTO customers (
	 				email_address, password, complete_name, 
	 				address_line1, address_line2, city, state, 
	 				zipcode, country, cellphone_no) 
	 				VALUES ('$email',(PASSWORD('$password')), '$name',
	 				'$address1','$address2','$city', '$state', '$zip', '$country', '$phone')";
	
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	if($result){
	?>
	
	<p> Congrats! <?php echo $name; ?> </p> your account was successfully created! </p>
	
	<?php
		
	}
	else{
		echo "Encountered an error!";
	}
	
	?>
