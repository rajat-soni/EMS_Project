<?php  include '../config.php';
session_start();


if(!empty($_POST['mesaage'])){
   
   $message = mysqli_real_escape_string($link, $_POST['mesaage']);
    $name =   $_POST['role'];

    $assign = mysqli_real_escape_string($link,$_POST['assign']); // assign as admin  id  // 
   foreach($name as $result){

   	$query = "INSERT INTO `task`( `mesaage`,`user_id`, `assign`) VALUES ('$message','$result','$assign')";
   // $assign is belong to session id means admin id who is login mean  admin login id   .. and user id  is belongs to the $result means emp id or name .. //
   	 $run = mysqli_query($link,$query);

   }

    if($run){
            
          header("Location: task.php");
          $_SESSION['task'] ='<div class="alert alert-info text-center">Successfully task assign</div>';

    }else{


          header("location: task.php");
   	      $_SESSION['error'] ='<div class="alert alert-warning text-center">Error in task assign !</div>;'; 
    }


    }else{

          header("location: task.php");
          $_SESSION['empty'] ='<div class="alert alert-info text-center">Please select at least one employee !</div>;';
    }


?>
