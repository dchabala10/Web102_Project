<?php

	session_start();
	
	$connection = mysqli_connect('localhost', 'root', 'root', 'web102') or die("Error " . mysqli_error($connection));

	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	// echo $username;

	$query = "SELECT * FROM users where username = '{$username}' and password = 
	'{$password}';";

	$result = $connection->query($query);
	

	if ($result->num_rows > 0){
		//md5 is encyption 
		$_SESSION['user_auth'] = true;	
	} else {
		$_SESSION['user_auth'] = false;
		session_destroy();
	}
	
	if ($_SESSION['user_auth'] == true){
		header('Location: ' . 'http://localhost:8888/exercise3_1/index.html');
	} else {
		header('Location: ' . 'http://localhost:8888/exercise3_1/login.html');

	}