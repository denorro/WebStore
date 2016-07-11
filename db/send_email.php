<?php
    

    $from = $_POST['email'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];
	$to = "denorrostallworth@gmail.com";
	$subject = "Inquiry From Customer";
	$msg .= $msg . " Phone: " . $phone;
	
				
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= "From: <?= $from ?> " . "\r\n";

	mail($to,$subject,$msg,$headers);
	$_SESSION['msg_present'] = true;
	$_SESSION['msg'] = "Email sent successfully!";
	$_SESSION['msg_good?'] = true;
				
	header("Location: ../index.php");
?>