<?php
session_start();
include ('../config.php');
$table ='wesite';
if(isset($_POST['email'])){
	$name = $_POST["name"];
    $course = $_POST["course"];

	$co = implode("," ,$course);
	$state = $_POST["state"];
	$city = $_POST ["city"];
    $imgName = $_FILES["image"];
	$img = $_FILES["image"]["name"];
	$img_size = $_FILES["image"]["size"];
	$img_type = $_FILES["image"]["type"];
	$img_error = $_FILES["image"]["error"];
	$temp_name =$_FILES["image"]["tmp_name"];
	$location = "../pic/".$img;

	move_uploaded_file($temp_name,$location);
		$email = $_POST["email"];
		$password = $_POST["password"];
		$dep = $_POST["deparment"];
			$role = $_POST["role"];
			$run  = " INSERT INTO `$table` (`name`,`course`,`state`,`city`,`image`,`email`,`password`,`deparment`,`role`)VALUES ('$name','$co','$state','$city','$img','$email','$password','$dep','$role') ";
		$qu = mysqli_query($link,$run);
		if($qu){
			
		
           $_SESSION['signup'] = "<h4 class='text-center text-info'>Data added successfully! </h4>";
           header("location: admindashbord.php");


		}else{

			$_SESSION['eror']="<h4 class='text-center text-info'>Error in submitting data! </h4>";
			
			header("location: signup.php");
		}
}
?>