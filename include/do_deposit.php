<?php
$dt = date("Y-m-d h:i:sa");

$deposit_date = date("Y-m-d", strtotime($_POST['date']));
$amount = $_POST['amount'];
$method = $_POST['method'];
$period = $_POST['period'];

$insert_query = "INSERT INTO deposits SET
			date = '$deposit_date',
			member_id = '$id',
			club_id = '$club_id',
			amount = '$amount',
			method = '$method',
			payment_for = '$period'";
			
if ($conn->query($insert_query) === TRUE) {
    echo '<p align="center">Your deposit has been recorded successfully. <br> You will be notified when the Treasurer verifies your payment</p>';

	$name = ''; $type = ''; $size = ''; $error = '';
	
	
	function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}

	if ($_POST) {
          
		  $fl_type = $_FILES["slip"]["type"];
		  
		  if($fl_type == "image/jpeg"){ $ext = "jpg"; }
		  if($fl_type == "image/gif"){ $ext = "gif"; }
		  if($fl_type == "image/png"){ $ext = "png"; }
		  if($fl_type == "image/pjpeg"){ $ext = "jpg"; }
		  
    		if ($_FILES["slip"]["error"] > 0) {
        			$error = $_FILES["slip"]["error"];
    		} 
    		else if (($_FILES["slip"]["type"] == "image/gif") || 
			($_FILES["slip"]["type"] == "image/jpeg") || 
			($_FILES["slip"]["type"] == "image/png") || 
			($_FILES["slip"]["type"] == "image/pjpeg")) {

        			
					$item_id = mysqli_insert_id($conn);
					$url = 'clubs/'.$club_id.'/deposits/'.$item_id.'.'.$ext;

        			$filename = compress_image($_FILES["slip"]["tmp_name"], $url, 80);
        			$buffer = file_get_contents($url);

$update_query = "UPDATE deposits SET attachement = '$url' WHERE ID='$item_id'";
$conn->query($update_query);
 
    		}else {
        			$error = "Uploaded image should be jpg or gif or png";
    		}
	}





} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}
  
?>