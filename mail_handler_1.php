<?php

	if(isset($_POST['submit'])){
		$free_name=$_POST['free_name'];
		$free_phone=$_POST['free_phone'];
		$free_email=$_POST['free_email'];
		$free_choice=$_POST['free_choice'];
		$free_message=$_POST['free_message'];

		$to='info@philadelphiapamobilenotary.net'; // Receiver Email ID, Replace with your email ID
		$free_choice="Subject :".$choice;
		$message="Name :".$free_name."\n"."Phone :".$free_phone."\n"."Email :".$free_email."\n"."Wrote the following :"."\n\n".$free_message;
		$headers="From: ".$email;

		if(mail($to, $free_choice, $free_message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>