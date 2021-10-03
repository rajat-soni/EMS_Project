<?php
include'../config.php';
include'header.php';

 //error_reporting();

if(isset($_POST['delete'])){



    if(empty($_REQUEST["chk"]) || $_REQUEST["chk"] == 0){


	           //session_start();
	           $_SESSION['error'] = '<div class="text-center mark mb-2 "> <dd><h4>Please select one first !</h4></dd></div>';
               header("location:admindashbord.php");

    }
    else{
                $result = $_REQUEST["chk"];
                $Result= implode(",",$result); 
   
                $table = 'wesite';
              

                $query=" DELETE FROM $table WHERE `id` IN (".$Result.")";  
              

           
                 $r=mysqli_query($link,$query) or die(mysqli_error());

            if($r)
                   {

	                      //session_start();
	                      $_SESSION['delete'] = '<h3><div class="text-center mark mb-2  "> Data deleted successfully</div></h3';
                          header("location:admindashbord.php");

                    }

        }
}

?>