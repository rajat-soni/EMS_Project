<?php
require_once ('header.php');

?>


<div class="container" style="">


	<h3 class="text-center text-info display-3 mt-2 mark">Task Section</h3><hr>
	<?php
       if(isset($_SESSION['error'])){
    	 echo $_SESSION['error'];
       	unset($_SESSION['error']);

       }

       if(isset($_SESSION['task'])){

       	echo $_SESSION['task'];
       	unset($_SESSION['task']);
       }

       if(isset($_SESSION['empty'])){

       	echo $_SESSION['empty'];
       	unset($_SESSION['empty']);
       }


		?>
	 
	<div class="row" style="margin-bottom: 30px;">



		<div class="col-md-6 " style="background-color: #d9d9d9; margin-top: 5vh">

	        <form method="POST" action="insert_task.php" enctype="multipart/form-data"     style="margin-bottom:20px; margin-top: 20px;">
	
	                    <div class="form-group" >
					        <input type ="hidden" name= "assign" value="<?php echo $_SESSION["user_id"];?>" >
					        <label style="" class="col-md-6"><h4><STRONG>Task Room</STRONG></h4></label>

					        <textarea class="form-control" name ="mesaage"  rows="10" placeholder="Write your task here" ></textarea>
				        </div>
	                          </div>
				
		
                <div class="col-md-6 " style="margin-top: 5vh;">
                    <div class="form-group ml-1" style=" padding-top: 3.5vh; padding-bottom:40px; background-color: #d9d9d9; padding-left:3vh;">
                	    <div class="checkbox">
			                    <label class="col-md-12"><h4>&nbsp;<STRONG>EMPLOYEE LIST&nbsp;&nbsp;</STRONG><a href="all_emp_task.php" class="btn btn-info btn-md">All Task</button></a>
              </h4></label>

			                    </div>
			                <label class="col-md-12">
                       

                                <?php
                	                 include("../config.php");
                	                 $table ='wesite';
                                     $my ="select * from `$table` where `role`= 'Employee' order by id desc";
                                     $run = mysqli_query($link,$my);
                                    while($row=mysqli_fetch_array($run)){
                                        echo'<div class="checkbox ml-2">';
			                              echo'<input type ="checkbox"  name ="role[]" value="'.$row['id'].'">&nbsp;'.$row["name"].'&nbsp;</label>';
			  

			                            echo'</div>'; 
			                        }
			                    ?>
                            </div>

                             <p style="  text-align:right; margin-top: 30px; margin-bottom: -19px; "><button type ="submit"  name="submit" class="btn btn-md btn-danger" style="border-radius: 10px 3px 10px 3px; ">Submit</button></p>   
            </form>
        </div>
	
    </div>


<?php
include_once('footer.php'); ?>

