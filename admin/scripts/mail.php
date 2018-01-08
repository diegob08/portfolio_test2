<?php

	function redirect_to($location){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}


	function submitMessage($name, $email, $message, $direct) {
		//echo "From submitmessage()";
		$to = "contact@diegobernal.com";
		$subject = "Message from user from hosting";
		$extra = "Reply to: " + $email;
		$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nComments: ".$message;
		$direct = $direct."?name={$name}";
		redirect_to($direct);

	}
?>
