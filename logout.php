<?php

	session_start();
	
		unset($_SESSION["user_auth"]); 
		header("Location: login.php");

		//call auth.php from here
		//see if session variable is set
		//if set, say variable is set (search how to send variables to html returns T or F)
		//if logged in it has logout button, vice versa