<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

$item_code = $_GET['item_code'];
$_SESSION['msg_present'] = true;
$_SESSION['msg_good?'] = true;
$_SESSION['msg'] = "Added To Cart!";

array_push($_SESSION['products_in_cart'], $item_code);

header('Location: ' . $_SERVER["HTTP_REFERER"]);
exit ;
?>