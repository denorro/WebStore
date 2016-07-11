<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<!DOCTYPE html>
<html>

<?php
    include 'partials/scripts_styles.php';
	echo "<body>";
	include 'partials/nav_bar.php';
	$connection = mysqli_connect("localhost:3306", "root", "admin", "shopping")
				  or die ( "Please check connection!");
	
	$query = "select email_address, password, complete_name from customers where
				email_address like '" . $_POST['email'] . "' " . 
				" and password like (PASSWORD('". $_POST['password'] ."'))";
				
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));	
	extract($result);
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		extract($row);
		$_SESSION['loggedin'] = true;
    	$_SESSION['name'] = $complete_name;
		$_SESSION['msg_present'] = false;
		$_SESSION['msg'] = null;
		$_SESSION['msg_good'] = true;
		$_SESSION['products_in_cart'] = array();
		header("Location: ../user.php");
	}
	else{
		$_SESSION['msg_present'] = true;
		$_SESSION['msg_good'] = false;
		$_SESSION['msg'] = "Access Denied! Check username/password!";
		header("Location: ../signin.php");
	}	
?>
</body>
</html>