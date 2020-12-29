<?php

	$name = $email = $color = $phone = $message = $quantity = $quantity1 = $quantity2 = $success = $checkList = $body = "";
	$name_error = $email_error = $phone_error = $color_error = $checkList_error = "";
	$checkList1 = $checkList2 = $checkList3 = "";
	$state = $address = $LGA = "";
	
	
	
    if(isset($_POST["submit"])){
		//name validation
		if(empty($_POST["name"])) {
			$name_error = "*name is required";
		} else { $name = $_POST["name"];}
		if (!preg_match("/^[a-zA-Z]*$/", $name)) {
			$name_error = "*only letters and white spaces";
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
		//phone validation 
		if(empty($_POST["phone"])) {
			$phone_error = "*phone number is required";
		} else { 
			$phone = $_POST["phone"];	
			if (!preg_match("/^[0-9]{11}+$/", $phone)) {
			$phone_error = "*invalid phone number";
			}
		}
		//checkbox validation
		if (!empty($_POST["checkList1"]) or !empty($_POST["checkList2"]) or !empty($_POST["checkList3"])) {
			$checkList1 = $_POST["checkList1"];
			$checkList2 = $_POST["checkList2"];
			$checkList3 = $_POST["checkList3"];
			$quantity = $_POST["quantity"];
			$quantity1 = $_POST["quantity1"];
			$quantity2 = $_POST["quantity2"];
			
		} else {
			$checkList_error = "*please select at least one product";
			
			
		}
		if (!empty($_POST["color"])) {
			$color = $_POST["color"];
		}
		if (!empty($_POST["quantity"])) {
			$quantity = $_POST["quantity"];
			
		}
		if (!empty($_POST["quantity1"])) {
			$quantity1 = $_POST["quantity1"];
			
		}
		if (!empty($_POST["quantity2"])) {
			$quantity2 = $_POST["quantity2"];
			
		}
		if (!empty($_POST["state"])) {
			$state = $_POST["state"];
		}
		if (!empty($_POST["LGA"])) {
			$LGA = $_POST["LGA"];
		}
		if (!empty($_POST["address"])) {
			$address = $_POST["address"];
		}
		
		if (!empty($_POST["message"])) {
			$message = $_POST["message"];
		} else {
			$message = "null";
		}
	
		if ($name_error == "" and $email_error == "" and $phone_error == "" and $checkList_error == "") {
			$to = "jacobssamuel57@gmail.com";
			$subject = "wine order";
			$headers = "from: $email";
			$headers .= "Reply to: $email";
			
			$body .= "<h1> New wine order </h1>";
			$body .= "from:  " .$name. " <br/>";
			$body .= "email address:  " .$email. " <br/>";
			$body .= "phone number:  " .$phone. " <br/>";	
			$body .= "<h3> The order </h3>";
			$body .= "<table>";
			
			$body .= "<tr>";
			$body .= "<th> item </th>";
			$body .= "<th> quantity </th>  ";
			$body .= "<th> type </th> <br/>";
			$body .= "<tr/>";
			$body .= "<tr>";
			$body .= "<td>" .$checkList1. "</td>";
			$body .= "<td>" .$quantity. "</td>";
			$body .= "<td>" .$color. "</td> <br/>" ;
			$body .= "</tr>";
			$body .= "<tr>";
			$body .= "<td>" .$checkList2. "</td>"; 
			$body .= "<td>" .$quantity1. "</td> <br/>";
			$body .= "</tr>";
			$body .= "<tr>";
			$body .= "<td>" .$checkList3. "</td>"; 
			$body .= "<td>"  .$quantity2. "</td> <br/>";
			$body .= "</tr>";
			$body .= "</table>";
			$body .= "<h3> Delivery Address </h3> ";
			$body .= "state: " .$state. "<br/>";
			$body .= "LGA: " .$LGA. "<br/>";
			$body .= "House address: " .$address. "<br/>";
			$body .= "Additional message: " .$message ;
			
			if(mail($to, $subject, $headers, $body) ) {
				$success = "Your order has been received, we'll contact you shortly. Thank you for your patronage";
				echo $body ;
				$name = $email = $phone = $checkList = $message = "";
			} 
		}
	}
	 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>