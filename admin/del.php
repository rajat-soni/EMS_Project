<?php
include'../config.php';
include'header.php';

 //error_reporting();

if(isset($_POST['del'])){



    if(empty($_REQUEST["chk"]) || $_REQUEST["chk"] == 0){

     
	           //session_start();
	           $_SESSION['error'] = '<div class="text-center bg-dark mb-2 "> <dd><h5>Please select one first !</h5></dd></div>';
               header("location:all_emp_task.php");

    }
    else{
            $result = array();
                $result = $_REQUEST["chk"];
                $Result= implode(",",$result); 
   
                $table = 'task';
              

                $query=" DELETE FROM $table WHERE `task_id` IN (".$Result.")";  
              

           
                 $r=mysqli_query($link,$query) or die(mysqli_error());

            if($r)
                   {

	                      //session_start();
	                      $_SESSION['del'] = '<h5><div class="text-center mark mb-2  "> Data deleted successfully</div></h5';
                          header("location:all_emp_task.php");

                    }

        }
}

?>