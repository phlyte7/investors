<?php 

/* This script:
 * 
 * Errors are handled with the function trigger_error("Query: $user\n<br />MySQL Error: "  mysqli_error($dbc));
 * 
 */
 
/**
 * jQuery-Ajax-PHP Sign Up Form
 *
 * Copyright (c) 2013 M. WEHBE (www.mcwehbe.com)
 * version 1.2 4/2/2013
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */ 



if (isset($_POST['submit_sign_up'])&&($_POST['submit_sign_up']== 'Submit')  ){

	
	require_once ('../../mysqli_connect_mcwehbe.php');
	$errors = array(); // Initialize error array.

// Validate the first_name:
if (!empty($_POST['first_name'])&& (preg_match ('/^[a-zA-Z]{1}[a-zA-Z-.\s]{1,18}[a-zA-Z]{1}$/i', $_POST['first_name']))) 
	{
	$first_name = $_POST['first_name'];
	$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	} elseif (empty($_POST['first_name']))
	{
	$first_name = NULL;
	$errors[] = 'Please enter your First Name.'; 
	echo'Please enter your First Name.';
	exit();
	}

elseif (!preg_match ('/^[a-zA-Z]{1}[a-zA-Z-.\s]{1,18}[a-zA-Z]{1}$/i',$_POST['first_name']))
	{	
	$first_name = NULL;
	$errors[] = 'Invalid First Name.';
	echo'Invalid First Name.';
	exit();
	}


// Validate the last_name:
if (!empty($_POST['last_name'])&& (preg_match ('/^[a-zA-Z]{1}[a-zA-Z-.\s]{1,18}[a-zA-Z]{1}$/i', $_POST['last_name']))) 
	{
	$last_name = $_POST['last_name'];
	$ln = mysqli_real_escape_string($dbc, trim($last_name));
	}
 elseif (empty($_POST['last_name'])) 
 	{
	$last_name = NULL;
	$errors[] = 'Please enter your Last Name.'; 
	echo 'Please enter your Last Name.';
	exit();
	}

elseif (!preg_match ('/^[a-zA-Z]{1}[a-zA-Z-.\s]{1,18}[a-zA-Z]{1}$/i',$_POST['last_name']))
	{
	$last_name = NULL;
	$errors[] = 'Invalid Last Name.';
	echo 'Invalid Last Name.';
	exit();
	}

// Validate the email:
if (!empty($_POST['email_sign_up'])&&filter_var($_POST['email_sign_up'],FILTER_VALIDATE_EMAIL))
	 {
	$email = $_POST['email_sign_up'];
	} 
elseif (empty($_POST['email_sign_up'])) 
	{
	$email = NULL;
	$errors[] = 'Please enter your Email address!';
	echo 'Please enter your Email address!';
	exit();
	}

elseif (!filter_var($_POST['email_sign_up'],FILTER_VALIDATE_EMAIL))
	{
	$email = NULL;
	$errors[] = 'Please enter a valid Email!';
	echo	'Please enter a valid Email!';
	exit();
	}

// Validate the confirm email:
if (!empty($_POST['confirm_email_sign_up'])) 
	{
	$confirm_email = $_POST['confirm_email_sign_up'];
	}
else {
	$confirm_email = NULL;
	$errors[] = 'Please enter your confirm Email address.';
	echo	'Please enter your confirm Email address.';
	exit();
	}
// Validate the same email:
if ($email!= NULL && $confirm_email!=NULL) 
	{
	if ($email != $confirm_email){$confirmation = NULL;
	$errors[] = 'Please enter the same Email address.';
	echo 'Please enter the same Email address.';
	exit();
	} 

	else// $email = $confirm_email
	{
	$confirmation = TRUE;
	$e = mysqli_real_escape_string($dbc, trim($email));
	$q2 = "SELECT email FROM  user where email='$e'";		
	$r2 = @mysqli_query ($dbc, $q2);
	$num = mysqli_num_rows($r2);
	if ($num ==0) 
	{
	$exist = TRUE;
	}
	else {$errors[] = 'This Email address already exist!';
	$exist = NULL;
	echo 'This Email address already exist!';
	exit();
	}// end of if ($num ==0)
	}// end of else $email = $confirm_email
}// end of if ($email!= NULL && $confirm_email!=NULL)
	
// Validate the password:
if ((!empty($_POST['password_sign_up']))&& (!preg_match ('/(&|\/|\'|<|>| |,|"){7,15}/', $_POST['password_sign_up']))) 
	{
	$password = htmlspecialchars($_POST['password_sign_up']);
	}
 else 
 	{
	$password = NULL;
	$errors[] = 'Please enter your password.';
	echo 'Please enter your password.';
	exit();
	}

// Validate the confirm password:

if (!empty($_POST['confirm_password_sign_up']))
	 {
	$confirm_password = htmlspecialchars($_POST['confirm_password_sign_up']);
	} 
else {
	$confirm_password = NULL;
	$errors[] = 'Please enter your confirm password.';
	echo 'Please enter your confirm password.';
	exit();
	}


// Validate the same password:
if (!empty($_POST['password_sign_up'])&&!empty($_POST['confirm_password_sign_up'])) 
	{
	if ($password<>$confirm_password){ $confirm = NULL;
	$errors[] = 'Please enter the same password!';
	echo 'Please enter the same password!';
	exit();
	}
	else{$confirmation = TRUE;
	
	$p = mysqli_real_escape_string($dbc, trim($password));
	}
	
		// Validate the gender:
	
	if (isset($_POST['gender'])&&(($_POST['gender'])=='m' OR $_POST['gender'])=='f') 
	{
	$gender = $_POST['gender'];
	$g = mysqli_real_escape_string($dbc, trim($gender));
	} 
	else 
	{ // Unacceptable value.
	$gender = NULL;
	$errors[] = 'Gender should be either "Male" or "Female"!';
	echo'Gender should be either "Male" or "Female"!';
	exit();
	}
	
	} 
	else 
	{ // $_POST['gender'] is not set.
	$gender = NULL;
	$errors[] = 'Please select your gender!';
	echo  'Please select your gender!';
	exit();
	}
	
	// Validate the country:
	
if ((($_POST['country'])!=="Country")&& filter_var($_POST['country'], FILTER_VALIDATE_INT, array('min_range' => 1,'max_range'=>250) ))
	{
	$country = $_POST['country'];
	$c = mysqli_real_escape_string($dbc, trim($country));
	}
	else 
	{
	$country = NULL;
	$errors[] = 'Please enter your country!';
	echo 'Please enter your country!';
	exit();
	}


// If everything is OK, print the message:
if ($first_name && $last_name && $email && $confirm_email && $password && $confirm_password && $exist &&$country &&$gender &&$confirmation )
 {

	$user = "INSERT INTO user (first_name, last_name,email,pass,gender,country_id, registration_date) VALUES ('$fn', '$ln','$e',SHA1('$p'),'$g','$c',NOW()) ";//insert in user table

	$r_user = @mysqli_query ($dbc, $user)or trigger_error("Query: $user\n<br />MySQL Error: " . mysqli_error($dbc)); // Run the query.
	if (mysqli_affected_rows($dbc) == 1)  
	{		
		// Send the email:
	$headers = "From: Website Name";	// Change Website Name
	$body = "Thank you, $first_name, for registering with us at WEBSITE NAME.\n\n";
	mail($email, 'Registration Confirmation ', $body, $headers);
		
/* Print a message: IMPORTANT DON'T change the sentence "Thank You" the validation in the JS file is based on this sentence to confirm that everything is OK */
echo  "<p>Thank you, $first_name, for registering with us at WEBSITE NAME.\n\n</p>An email has been sent to your address: <i>$email</i>.<p>Please check to ensure that you have received your confirmation email.</p><input name='sign_up_reset' id='sign_up_reset' type='button' class='reset_sign_up_submit'  value='Reset'/> ";	
		mysqli_close($dbc);
   		exit();
	
		} 
			
	else 
	{ // If it did not run OK. Not insert the user
			
	// Public message:
	echo '<div class="error">You could not be registered due to a system error. We apologize for any inconvenience.</div>'; 
			
	mysqli_close($dbc);
	exit();
}
		
}// End of if everything is not fine
else 
	{
			
	echo "$errors[0]";
	mysqli_close($dbc);
	exit();
  }
			

}// End if (isset($_POST['submit_sign_up'])&&($_POST['submit_sign_up']== 'Submit')  )