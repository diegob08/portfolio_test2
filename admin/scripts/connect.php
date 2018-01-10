<?php
	$user = "root";
	$pass = "root";
	//$pass = "root"; for mac only
	$url = "localhost";
	$db = "db_mail";

	$link = mysqli_connect($url, $user, $pass, $db, "8888");
	//creates us access token to our database
	$link = mysqli_connect($url, $user, $pass, $db);

	//Check connection
	if(mysqli_connect_errno()) {
		printf("Connection failed: %s\n", mysqli_connect_error());
		exit();
	}
 ?>
