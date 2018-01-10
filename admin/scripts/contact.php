<?php

	function send_to($location){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}

	//echo "From mail file";
	function submitEmail($name, $email, $subject ,$message, $direct) {
		//echo "From submitmessage()";
		$to = " contact@diegobernal.com";
		$subject = "Message from user";
		$extra = "Reply to: " + $email;
		$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nComments: ".$message;
		//mail($to,$subject,$msg,$extra);
		$direct = $direct."?name={$name}";
		send_to($direct);

	}
?>
