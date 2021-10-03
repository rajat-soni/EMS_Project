<?php 
require_once'header.php';
require_once'../config.php';



echo'<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-6">';
echo '<h4 class="text-info mt-3 mb-3 display-4"> Message Veiw Detail</h4>';
echo'</div>';

echo '<div class="col-md-6 mt-4">';
echo '<h4 class="text-left text-info"></h3>';
echo '</div>';
echo'<hr>';


// if(isset($_SESSION['error1'])){

//                                           echo $_SESSION['error1'];
//                                           unset($_SESSION['error1']);
//                                           session_destroy($_SESSION['error1']);
//                                         }

//                                           if(isset($_SESSION['error'])){
//                                            echo $_SESSION['error'];
//                                            unset($_SESSION['error']);
//                                            session_destroy($_SESSION['error']);
//                                         }
                                          
//                                            if(isset($_SESSION['success'])){
//                                            echo $_SESSION['success'];
//                                            unset($_SESSION['success']);
//                                            session_destroy($_SESSION['success']);
                                           
//                                         }  
                 
echo'</div>';
echo'</div>';

 

if(!empty($_GET['task_id'])){
	$Task_id = $_GET['task_id'];
	echo '<div class="container">';
	echo'<div class="row">';

 
  

	$table = 'task';
    $my = mysqli_query($link,"select * from `$table` where `task_id` ='".$_GET['task_id']."'");
    $count =mysqli_num_rows($my);
    $row = mysqli_fetch_array($my);

    if($count>0){echo'<div class="col-md-12 col-sm-12 col-lg-12 mt-4 pl-4 pr-4 pt-4 pb-4" style ="background-color:#d9d9d9; padding-left: 40px;" class="">
    	'.$row['mesaage'].' </div>';
       '</div>';
        echo'<div>';
    }
   }
   echo'</div>';echo'</div>';


if(isset($_GET['task_id'])){

  $task_id = $_GET['task_id'];
  //echo $m_id; //
  echo'<div class="container">';
  echo'<div class="row  mt-4 mb-4">';
  echo '<div class="col-lg-3 col-sm-3 col-md-3 mt-2">';
  echo'<h4 class="text-info  pl-5">Reply by User</h4>';
  echo'</div>';

  echo '<div class="col-lg-9 col-sm-9 col-md-9 mt-2">';
  echo'<form action="" method="POST">';
  echo'<input type ="hidden"  name="m_id" value="'.$task_id.'"/>';
  echo'<input type ="hidden"  name="reply_by" value="'.$_SESSION['user_id'].'/">'; // emp login id  //
  echo'<textarea   name="m_name" rows="10"  style="width:100%; background-color: #d9d9d9; padding: 10px;"></textarea>';
  echo'<button type ="submit"  name="submit"   class="btn btn-md btn-danger"> Submit Reply</button>';
  echo'</form>';
  echo'</div>';
  echo'</div>';
  echo'<div>';
  }     


  if(!empty($_POST['m_name'])){
  $task_id = $_POST['m_id'];
  $u_id = $_POST['reply_by'];
  $reply = mysqli_real_escape_string($link, $_POST['m_name']);
  $In_query = 'reply';

  $query =  " INSERT INTO `$In_query`(`reply`, `m_id`, `reply_by`) VALUES ('$reply','$task_id','$u_id') ";
  $my = mysqli_query($link,$query);


  if(!empty($my)){echo '';}else{echo '<div class="alert alert-danger"> Response not submitted!</div>';}}else{}

?>

<div class="container">
  <div class="row">
    <div class="col">

  <?php

  if(isset($_GET['task_id'])){

        $m_id = $_GET['task_id'];

    if($m_id!=0){$run = mysqli_query($link,"SELECT  * from `reply`  join `wesite` on `wesite`.`id`=`reply`.`reply_by`where `m_id` = '$m_id'");

        while($row = mysqli_fetch_array($run)){if($row['reply']!= NULL){echo'<div class="alert  text-center" style="background-color: #d9d9d9;">By&nbsp;:->&nbsp;'.$row['name'].'&nbsp; :&nbsp;'.$row['reply'].'</div>';}else{echo'';
        }
    }

    }else
    {
        header("location:reply.php");
    }
    }else
    {header("location:reply.php");
    }

     ?>
    
    

    </div>
      
    </div>
  </div>
  
          


<?php

require_once 'footer.php';

?>




