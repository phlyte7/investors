<?php
$dt = date("Y-m-d h:i:sa");

$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$occu = $_POST['occupation'];
if(isset($_POST['date_joined'])){ $club_date = $_POST['date_joined']; } else { $club_date = ""; }

$fn = $_POST['fname'];
$ln = $_POST['lname'];
$on = $_POST['oname'];

//------------------------------

	$name = ''; $type = ''; $size = ''; $error = ''; $url = $profile_pic;
	
	
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
					$url = 'clubs/'.$club_id.'/members/'.$id.'.'.$ext;

        			$filename = compress_image($_FILES["slip"]["tmp_name"], $url, 80);
        			$buffer = file_get_contents($url);

 
    		}else {
        			$error = "Uploaded image should be jpg or gif or png";
    		}
	}
	
$insert_query = "UPDATE club_members SET
			fname = '$fn',
			lname = '$ln',
			oname = '$on',
			email = '$email',
			phone = '$phone',
			occupation = '$occu',
			date_joined = '$date_joined',
			gender = '$gender',
			profile_pic = '$url' WHERE ID='$id'";
			
if ($conn->query($insert_query) === TRUE) {
    echo '<p align="center">Your profile has been updated successfully.</p>';
} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}
  
?>