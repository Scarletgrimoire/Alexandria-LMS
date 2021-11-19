<?php
	session_name('SID');
	session_start();
	setcookie(session_name(), '', 100);
	setcookie('APP_AT', '', 100);
	setcookie('APP_RT', '', 100);
	session_unset();
	session_destroy();
	$_SESSION = array();
	header("Location: index");
?>
