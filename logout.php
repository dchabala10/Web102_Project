<?php

	session_start();
	
	if ($_SESSION['user_auth'] == true){
		header('Location:' . 'http://localhost:8888/exercise3_1/login.html');
	} else {
		echo "Here";
	}


		//call auth.php from here
		//see if session variable is set
		//if set, say variable is set (search how to send variables to html returns T or F)
		//if logged in it has logout button, vice versa