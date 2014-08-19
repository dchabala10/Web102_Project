<?php

	$connection = mysqli_connect('localhost', 'root', 'root', 'web102') or die("Error " . mysqli_error($connection));

	$search = $_GET['search'];

	$query = "SELECT * FROM users where first_name like '%{$search}%' or
	$last_name like '%{$search}%' email like '%{$search}%' or username like
	$'%{$search}%'; "; 

	$result = $connection->query($query);

	while($row = mysqli_fetch_array ($result)) {
		echo "User: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
	}