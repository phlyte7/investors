<?php


function getMemberName($mem_id){
include("cnx.php");
	
	$sql1 = "SELECT * FROM club_members WHERE ID='$mem_id'"; 
	$result1 = $conn->query($sql1);
      while($row1 = $result1->fetch_assoc()) {  
	  $fname =  $row1["fname"];
	  $lname =  $row1["lname"];
	  $oname =  $row1["oname"];
	  $full_name = $fname." ".$lname." ".substr($oname,0,1); }
	  
	  return $full_name;
	
}

function getPaymentPeriod($period){
	
	$dates = explode("-", $period);
	$date1 = date('M', mktime(0, 0, 0, substr(trim($dates[0]),0,2), 10))." ".substr(trim($dates[0]),6,4);
	$date2 = date('M', mktime(0, 0, 0, substr(trim($dates[1]),0,2), 10))." ".substr(trim($dates[1]),6,4);
	
	if($date1==$date2){ return $date1; }
	else { return $date1."-".$date2; }
}
?>