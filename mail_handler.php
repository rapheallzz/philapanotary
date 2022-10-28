<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$date=$_POST['date'];
		$address=$_POST['address'];
		$time=$_POST['time'];
		$choice=$_POST['choice'];
		$choice_1=$_POST['choice_1'];
		$message=$_POST['message'];

		$to='info@philadelphiapamobilenotary.net'; // Receiver Email ID, Replace with your email ID
		$choice="Subject :".$choice;
		$message="Name :".$name."\n"."Email :".$email."\n"."Phone :".$phone."\n"."Date :".$date."\n"."Address to Meet :".$address."\n"."Appointment Time :".$name."\n"."Number of Document :".$choice_1."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $choice, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>