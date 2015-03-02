<?php
$dt = date("Y-m-d h:i:sa");

$deposit_date = date("Y-m-d", strtotime($_POST['date']));
$date = $_POST['date'];
$particulars = $_POST['particulars'];
$amount = $_POST['amount'];
$category = $_POST['category'];
$approver = $_POST['approver'];

$insert_query = "INSERT INTO expenses SET
			date = '$deposit_date',
			club_id = '$club_id',
			particulars = '$particulars',
			category = '$category',
			amount = '$amount',
			approvedby = '$approver'";
			
if ($conn->query($insert_query) === TRUE) {
    echo '<p align="center">Your expense has been recorded successfully.</p>';


} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}
  
?>