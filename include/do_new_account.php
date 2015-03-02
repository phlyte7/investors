<?php
$dt = date("Y-m-d h:i:sa");

$fullname = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uname = $_POST['userid'];
$gender = $_POST['gender'];
$occ = $_POST['occupation'];
if(isset($_POST['date_joined'])){ $club_date = $_POST['date_joined']; } else { $club_date = ""; }
$pwd1 = $_POST['password'];
$pwd2 = $_POST['password2'];

$names = explode(" ", $fullname);
$fn = $names[0];
$ln = $names[1];
if(isset($names[2])){ $on = $names[2]; } else { $on = ""; }
if(isset($names[3])){ $on = $on." ".$names[3]; }
if(isset($names[4])){ $on = $on." ".$names[4]; }

$md5 = substr(md5($email),0,6); $sha1 = substr(sha1($dt),0,9);
$code = $md5."-".$sha1;

$insert_query = "INSERT INTO club_members SET
			fname = '$fn',
			lname = '$ln',
			oname = '$on',
			email = '$email',
			phone = '$phone',
			gender = '$gender',
			uname = '$uname',
			pwd = '$pwd1',
			status = 'pending_activation',
			activation_key='$code'";
			
if ($conn->query($insert_query) === TRUE) {
    echo '<p align="center">Your account has been create successfully. <br> An activation link has been sent to your email.<br>Test link:Click to activate <a href="http://localhost/investors/welcome.php?do=activate&code='.$code.'">http://localhost/investors/welcome.php?do=activate&code='.$code.'</a></p>';
} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}
  
?>