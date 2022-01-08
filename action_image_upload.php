<?php
error_reporting(0);
?>
<?php
$msg = "";
//echo "yess";

// If upload button is clicked ...


	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = $filename;
        include_once 'includes.php';	
	$db = mysqli_connect("localhost", "root", "", "final_project");
    $qr="select * from current;";
$res=mysqli_query($cnn,$qr);
$rr=mysqli_fetch_assoc($res);
$d_mail=$rr['email'];
//echo $d_mail;

		// Get all the submitted data from the form
		$sql = "update photos set filename='$filename' where email='$d_mail'";

		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}

//echo $msg;
$res = mysqli_query($db, "SELECT * FROM photos where email='$d_mail'");
$rr=mysqli_fetch_assoc($res);
header('location:doctor.php');
echo $rr['filename'];


echo '<img src="'.$rr['filename'].'">';
?>