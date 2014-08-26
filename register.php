<?php
	
	$connection = mysqli_connect('localhost', 'root', 'root', 'web102') or die("Error " . mysqli_error($connection));


	$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);


	$query = "INSERT INTO users (first_name, last_name, username, password, email) VALUES ('{$firstname}', '{$lastname}', '{$username}', '{$password}', '{$email}')";

	$result = $connection->query($query);
