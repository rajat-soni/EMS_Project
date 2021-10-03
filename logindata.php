<?php
session_start();
include ('config.php');
$table = 'wesite';
if(isset($_POST['email'])){
	
		    $email = $_POST['email'];
		
			$password = $_POST['password'];
				
			
			$run  = " SELECT * FROM `$table` WHERE `email` = '$email' AND  `password` = '$password' ";


		    $qu = mysqli_query($link,$run);
		    $count = mysqli_num_rows($qu);
		    $rol = mysqli_fetch_array($qu);
		    $row = $rol['role'];


		if($count == 1){

			$session = session_id();
		    $_SESSION['auth'] = $session;
		    
		    $_SESSION['user_id'] = $rol['id'];
		    $_SESSION['email'] = $rol['email'];
		    $_SESSION['role'] = $row;

		    // print_r($_SESSION['user_id']);
		   // die;
         	$row=$rol['role'];
			if($row =='Admin'){
			header("location:admin/admindashbord.php");

        }elseif($row =='Employee'){

			 //$_SESSION['email']=  $rol['email'];
			 //echo $emp_mail;

			$_SESSION['emp']= "<h4  class='text-center text-info'>Welcome to new Emp</h4>";
			header("location:employee/empdashbord.php");

		}else{

	        $_SESSION['helo']="<h4  class='text-center text-info'>Your Email and Password not match !</h4>";
		    header("Location:login.php");
    }

}else{

	       $_SESSION['helo']="<h4  class='text-center text-danger'>Your Email and Password not match !</h4>";
		   header("Location:login.php");

	}
}

?>