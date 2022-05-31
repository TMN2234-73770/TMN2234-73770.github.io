<?php
 $fname= $lnameErr = $emailErr = $phone = $password= "";;
 $fnameErr= $lnameErr= $emailErr= $phoneErr= $passwordErr= "";
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
	 if(empty($_POST["fname"])){
		 $fnameErr = "Required";
		 
	 }
	 else
	 { 
		$fname = test_input ($_POST["fname"]); 
			if(!preg_match("/^[a-zA-Z-' ]*$/", $fname)){
				$fnameErr = "first character uppercase and follow by lowercase";
			}
	 }
	 
	 if(empty($_POST["lname"])){
		 $lnameErr = "Required";
		 
	 }
	 else
	 { 
		$lname = test_input ($_POST["lname"]); 
			if(!preg_match("/^[a-zA-Z-' ]*$/", $lname)){
				$fnameErr = "first character uppercase and follow by lowercase";
			}
	 }
	  
	 if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} 
	else 
	{
		
		$email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
    }
  }
	 
	if(empty($_POST["phone"])){
		 $phoneErr = "Required";
		 
	 }
	 else
	 { 
		$phone = test_input ($_POST["phone"]); 
			if(!preg_match("/^[0-9]{10}+$/", $phone)){
				$phoneErr = "Please enter a valid phone number";
			}
	 }
	
	    if(!empty($_POST["password"]))
        {           
            // validate password
            if (!preg_match("/^[a-zA-Z0-9!@#$%^&*]*$/", $password))
            {
                $passwordErr = "Password must contain at least one letters, one numbers and one special characters.";
            }
            if (strlen($password) = 6 )
            {
                $passwordErr = "Password must be 6 characters.";
            }
        }
 }
 function test_input(&data){
	 
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
 }
 include('index.html')
?> 