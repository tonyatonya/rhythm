<?php
	session_start();

	if($_POST['lang'] == 'en'){
		//$lang = $_POST['lang'];
		$_SESSION['lang'] = 'th';
	}else if($_POST['lang'] == 'th'){
		//$lang = $_POST['lang'];
		$_SESSION['lang'] = 'en';
		//$lang = (isset($_SESSION['lang']))?$_SESSION['lang']:'en';
	}else{ $_SESSION['lang'] = 'en'; }
?>
