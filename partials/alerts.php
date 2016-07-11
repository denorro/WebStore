<?php
    if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
    
    if (isset($_SESSION['msg_present']) && $_SESSION['msg_present'] == true) {
    	if (isset($_SESSION['msg_good']) && $_SESSION['msg_good'] == true){
    		$msg = $_SESSION['msg'];
    		echo "<div class=\"alert alert-success\" role=\"alert\"> $msg </div>";
    	}else{
    		$msg = $_SESSION['msg'];
    		echo "<div class=\"alert alert-danger\" role=\"alert\"><h4> $msg </h4></div>";
    	}    	
	}	
	$_SESSION['msg_present'] = false;
?>