<?php
	
	$previousPage = $_SERVER['HTTP_REFERER'];
    session_start();
	session_destroy();
	header('location:'.$previousPage);
	
?>
