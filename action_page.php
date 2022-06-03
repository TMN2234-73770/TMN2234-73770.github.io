<?php 

 $fname= $lname = $email = $phone = $password= "" $checked="";
 $fnameErr= $lnameErr= $emailErr= $phoneErr= $passwordErr= $checkedErr =="";
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
	 if(empty($_POST["fname"])){
		 $fnameErr = "Required";
		 
	 }
	 else
	 { 
		$fname = test_input ($_POST["fname"]); 
			if(!preg_match("/^(\b[A-Z][a-z]*\s*)+$/", $fname)){
				$fnameErr = "first character uppercase and follow by lowercase";
			}
	 }
	 
	 if(empty($_POST["lname"])){
		 $lnameErr = "Required";
		 
	 }
	 else
	 { 
		$lname = test_input ($_POST["lname"]); 
			if(!preg_match("/^(\b[A-Z][a-z]*\s*)+$/", $lname)){
				$fnameErr = "first character uppercase and follow by lowercase";
			}
	 }
	  
	 if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} 
	else 
	{
		
		$email = test_input($_POST["email"]);
			if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9_\.\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email)) {
    }
  }
	 
	if(empty($_POST["phone"])){
		 $phoneErr = "Required";
		 
	 }
	 else
	 { 
		$phone = test_input ($_POST["phone"]); 
			if(!preg_match("/^\+?([0-9]{2})\)?[-. ]?([0-9]{3,4})[-, ]?([0-9]{4})$/", $phone)){
				$phoneErr = "Please enter a valid mobile number For example: +xx-xxxxxxxxx";
			}
	 }
	
	    if(!empty($_POST["password"]))
		{
			$passwordErr = "Required";
		}
		
            if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#?!@$%^&*-]). {6,}$/", $password))
            {
                $passwordErr = "Password should be 6 digits length contain ONE  uppercase ONE lowercase ONE special character  ";
            }
     
        }
		
		if(!isset($_POST["accept"]))
		{
			$checkedErr = "Please agree to the Terms and Conditions";
			}
 }
 function test_input(&data){
	 
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
 }
	 if(isset($_POST['Register']))
	 { 
		if($fnameErr ==""&& $lnameErr ==""&& $emailErr ==""&& $phoneErr ==""&& $passwordErr ==""&& $checkedErr ==""){
			echo "Register successful";
		}
		 
	 }
	
 include("index.html")
?> 