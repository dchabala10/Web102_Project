<?php
	
	//starts session in browser
	session_start();

	if ($_POST['username'] != ""){
		//md5 is encyption 
		$_SESSION['user_auth'] = $_POST['username'];	
	} else {
		$_SESSION['user_auth'] = "";
	}
	
	if (substr($_SESSION['user_auth'], 0, 2) != "SK"){
		echo "Bad Key";
	} else {
		echo "You are logged in - Good Key<br>";
		echo $_SESSION['user_auth'];
	}