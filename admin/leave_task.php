<?php  include '../config.php';

require_once '../auth/auth.php';


if(isset($_POST['submit'])){
  
 

   $v_from = $_POST['vaildfrom'];
   
   $v_to = $_POST['vaildto'];
   //print_r($v_to); 
   $e_leave = $_POST['e_leave'];
   //print_r($e_leave);
   $c_leave = $_POST['casual_leave'];
   //print_r($c_leave);   
   $m_leave = $_POST['medical_leave'];
   //print_r($m_leave);  die;
   $reason  = mysqli_real_escape_string($link,$_POST['reason']);
   //print_r($reason);
   $assign_by =  mysqli_real_escape_string($link,$_POST['assign_by']);;  // user id //
   
     //print_r( $assign_by);
  
          // assign as admin  id  //
          $name = $_POST['role'];
           if(empty($_POST['e_leave'] != NULL) || empty( $_POST['casual_leave']) != NULL || empty( $_POST['medical_leave']) != NULL){
       
  foreach($name as $result){
    // echo'<pre>';
    // //print($result); die;
    // echo'</pre>';

   	 $run = mysqli_query($link, "INSERT INTO `leave_task`(`vaild_from`, `vaild_to`, `Earning_leave`, `causal_leave`, `medical_leave`, `reason`, `assign_by`, `user_id`)VALUES 
      ('".$_POST['vaildfrom']."','".$_POST['vaildto']."','".$_POST['e_leave']."','".$_POST['casual_leave']."','".$_POST['medical_leave']."','".$_POST['reason']."','".$_POST['assign_by']."','$result')");
   
        //echo $run ; die;

  }
    }else{

      echo "select type the leave";
    }
   if($run){
            
        
            header("Location: leave.php");

            $_SESSION['task'] ='<div class="alert alert-info text-center">Successfully  assign leave </div>';
   }else{


   	header("location: leave.php");
   	$_SESSION['error'] ='<div class="alert alert-warning text-center">Error in task assign !</div>;';

   }


}else{
       
      header("location: leave.php");
    $_SESSION['empty'] ='<div class="alert alert-info text-center">Please select at least one employee !</div>;';

}


?>
