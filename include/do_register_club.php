<?php
$dt = date("Y-m-d h:i:sa");

$fullname = $_POST['club_name'];
$started = $_POST['date_started'];
$ownership = $_POST['ownership'];
$legal = $_POST['legal_status'];
$city = $_POST['city'];
$urs_id = $_POST['user_id'];

$date_started = date("Y-m-d", strtotime($started));

$insert_query = "INSERT INTO investment_clubs SET
			investment_club = '$fullname',
			club_category_id = '$ownership',
			date_started = '$date_started',
			address = '$city',
			ownership_type_id = '$legal',
			admin_user_id = '$urs_id'";
			
if ($conn->query($insert_query) === TRUE) {
	
	$club_id = mysqli_insert_id($conn);
	$club_folder = "clubs/".$club_id;
	$club_folder_docs = $club_folder."/docs";
	$club_folder_deposits = $club_folder."/deposits";
	
    mkdir($club_folder, 0700);
	mkdir($club_folder_docs, 0700);
	mkdir($club_folder_deposits, 0700);
	
$update_query = "UPDATE club_members SET
			investment_club_id = '$club_id'
			WHERE ID='$urs_id'";
			
if ($conn->query($update_query) === TRUE) {
	
	$_SESSION['user'] = $urs_id;
	$_SESSION['club'] = $club_id;
	
    echo '<p align="center">Investment Club accout created successfully.<br>Click to Manage club detailes <a href="http://localhost/investors/">http://localhost/investors</a></p>';
}

} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}
  
?>