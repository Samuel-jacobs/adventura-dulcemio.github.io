<?php

	$name = $phone = $email = $subject = $message = $success = $body = "";
	$name_error = $email_error = $phone_error = $message_error = $subject_error = "";


	 if(isset($_POST["submit"])){
		//name validation
		if(empty($_POST["name"])) {
			$name_error = "*name is required";
		} else { $name = $_POST["name"];}
		if (!preg_match("/^[a-zA-Z]*$/", $name)) {
			$name_error = "*only letters and white spaces";
		}
		//phone validation 
		if(empty($_POST["phone"])) {
			$phone_error = "*phone number is required";
		} else { 
			$phone = $_POST["phone"];	
			if (!preg_match("/^[0-9]{11}+$/", $phone)) {
			$phone_error = "*invalid phone number";
			}
		}
			//email validation
		if(empty($_POST["email"])) {
			$email_error = "*email is required";
		} else { 
			$email = $_POST["email"];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "*invalid email format";
			}
		}
		if (!empty($_POST["subject"])) {
			$subject = $_POST["subject"];
		} else {
			$subject_error = "*please add a subject";
		}
		$message = $_POST["message"];
		
		if ($name_error == "" and $phone_error == "" and $email_error == "") {
			$to = "jacobssamuel57@gmail.com";
			$subject = $subject;
			$headers = "from: " .$email;
			$headers .= "Reply to:" .$email;
			$body .= "New message <br/>";
			$body .= "Name: " .$name . "<br/>";
			$body .= "Phone nuumber: " .$phone. "<br/>";
			$body .= "Email Address: " .$email. "<br/>";
			$body .= "Message: <br/>";
			$body .= $message;
			
			if(mail($to, $subject, $headers, $body) ) {
				$success = "Your message has been received, we'll contact you shortly. Thank you for contacting us";
				
				$name = $email = $phone = $checkList = $message = "";
			} 
		}
	}
	






















?>