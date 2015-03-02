<?php
$penl = $_POST['penalty'];
$fine = $_POST['fine'];

$insert_query = "INSERT INTO penalty_settings SET
			penalty_type = '$penl',
			club_id = '$club_id',
			amount = '$fine'";
			
if ($conn->query($insert_query) === TRUE) {
    echo '<p align="center">Penalty has been set successfully.</p>';


} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}
  
?>