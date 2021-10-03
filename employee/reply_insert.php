<?php
require_once'../config.php';
require_once'../auth/auth.php';

session_start();
if(!empty($_POST['m_name'])){
 

$id = $_POST['m_id'];

$u_id = $_POST['user_id'];

$reply = mysqli_real_escape_string($link, $_POST['m_name']);

$In_query = 'reply';

$query =  "INSERT INTO `$In_query` (`reply`, `m_id`, `reply_by`) VALUES ('$reply','$id','$u_id')";

$my = mysqli_query($link,$query);

   if(!empty($my))
   { 
    
   
     header("location:reply.php");


      }else{

   
    header("location:reply.php");
       }


}

else{

	 
	header("location:reply.php");
       
}

?>

   


