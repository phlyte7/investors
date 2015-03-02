<?php
if(isset($_GET["code"]) && $_GET["code"]!=""){
	$act_code = $_GET["code"];
	$sql = "SELECT * FROM club_members WHERE activation_key='$act_code'"; 
	$result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
	  $name =  $row["fname"]; 
	  $usr_id =  $row["ID"]; 
	 }
$activate_query = "UPDATE club_members SET
			status = 'pending_payment',
			activation_key = ''
			WHERE ID='$usr_id'";
			
if ($conn->query($activate_query) === TRUE) {
    $act_status = 'Dear '.$name.';<br>Your Account has been activated successfully.<br><br><a href="?do=new_club&amp;ac='.$usr_id.'">Click to proceed to create your club profile.</a>'; }
	else {
	$act_status = 'Dear '.$name.';<br>Your Account could not be activated at this time. Open your email and click the activation link again'; }
	 
echo $act_status;

}
?>