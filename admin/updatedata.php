<?php
session_start();
include ('../config.php');
if(isset($_POST["email"])){
$id =$_POST['id'];
	$name = $_POST["name"];
$course = $_POST["course"];
	 //print_r($course);

	$co = implode("," ,$course);
		 //print_r($co);
	
	$state = $_POST["state"];
		 //print_r($state);
	$city = $_POST ["city"];

		 //print_r($city);
	$imgName = $_FILES["image"];
	$img = $_FILES["image"]["name"];
	$img_size = $_FILES["image"]["size"];
	$img_type = $_FILES["image"]["type"];
	$img_error = $_FILES["image"]["error"];
		
	$temp_name =$_FILES["image"]["tmp_name"];
	$location = "../pic/".$img;

	if($img == ""){

		echo "please select one";
	}
	else{
		header("location: admindashbord.php");

	}
	
	move_uploaded_file($temp_name,$location);

		$email = $_POST["email"];
			// print_r($email);
			$password = $_POST["password"];
				// print_r($password);
			$dep = $_POST["deparment"];
			$role = $_POST["role"];


             if($_POST['password'] ==''){

			$run  = "UPDATE `wesite` SET `name`='$name',`course`='$co',`state`='$state',`city`='$city',`image`='$img',`email`='$email',`deparment`='$dep',`role`='$role' where id = '$id'";
			}
			else{

				$run  = "UPDATE `wesite` SET `name`='$name',`course`='$co',`state`='$state',`city`='$city',`image`='$img',`email`='$email',`password`='$password',`deparment`='$dep',`role`='$role' where id = '$id'";
			}
			
			// print_r($run);
		$qu = mysqli_query($link,$run);
		// print_r($qu);
		if($qu){
			
		
$_SESSION['he'] = "<h4 class='text-center text-info'>Your are successfully Update! </h4>";
// unset($_SESSION['hello admin']);
header("location: admindashbord.php");


		}else{
			$_SESSION['hel'] = "<h4 class='text-center text-info'>Error In submitting data! </h4>";
			
			header("location:edit.php");

		}

	
}
?>