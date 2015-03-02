<?php
session_start();
require_once("cnx.php");

//$dt = date("Y-m-d h:i:sa");
$dt = date("Y-m-d");

$uname = $_POST['userid'];
$pwd = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];


$sql = "SELECT * FROM club_members WHERE uname='$uname' AND pwd='$pwd'"; 
	$result = $conn->query($sql);
	if(mysqli_num_rows($result)>0){
      while($row = $result->fetch_assoc()) {
	  //$name =  $row["fullname"]; 
	  $urs_id =  $row["ID"]; 
	  $club_id =  $row["investment_club_id"]; 
	  $ac_status = $row["status"];
	 }

if($ac_status=="pending_activation"){ 
//echo "Your account has not been activated. Check your email for an activation link.";
$err = base64_encode("Your account has not been activated. Check your email for an activation link.");		

echo '<script>window.location.href = "../welcome.php?do=loginfail&rsp='.$err.'";</script>';


} else {
$_SESSION['user'] = $urs_id;
$_SESSION['club'] = $club_id;
echo '<script>window.location.href = "../index.php";</script>';

}//close is "not" pending activation

} else {
$err = base64_encode("invalid username or password");		

echo '<script>window.location.href = "../welcome.php?do=loginfail&rsp='.$err.'";</script>';

}


?>