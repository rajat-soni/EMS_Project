<div class="container-fixed" style="background-color: #d9d9d9;">
<?php
require_once ('header.php');

?>


<div class="container-fixed" style="background-color: #d9d9d9; padding-bottom: 50px;">


	<h3 class="text-center text-info display-4 mt-2 py-4 shadow" style="background-color: #d9d9d9;">Leave Management Section</h3><hr>
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
  <div class="col-md-7  shadow mb-1" style="background-color: #d9d9d9; margin-top: 5vh;margin-left: 4vh; padding-left: 2vh;">
    <form method="POST" action="leave_task.php" enctype="multipart/form-data"     style="margin-bottom:20px; margin-top: 20px;">
      
      <div class="form-group">
        <div class="col-lg-8 pl-3" >
          
        <label><h4><STRONG>Leave Management</STRONG></h4></label>
      </div>
        <div class="col-lg-2">
          <input type ="hidden" name= "assign_by" value="<?php echo $_SESSION["user_id"];?>" >
          
        </div>
      </div>
      
      <div class="form-group">
        <div class="row">
        <div class="col-lg-2">
        <label class="text-center">Valid From</label>
      </div>
        <div class="col-lg-8">
          <input type ="date" name= "vaildfrom" value="vaildfrom" class="form-control">
          
        </div>
      </div>
    </div>

      <div class="form-group" >
        <div class="row">
        <label class="col-md-2">Valid to</label>
        
       <div class="col-lg-8" >

          <input type ="date" name= "vaildto" value="vaildto" class="form-control">
          
        </div>
      </div>
        
      </div>
          

        <div class="form-group">
          <div class="row">

        <label  class="col-md-2">Earing Leave</label>
        
       <div class="col-lg-8">
        
          <input type ="text" name= "e_leave" value="" class="form-control" placeholder="Earing leave">
          
        </div>
        </div>
      </div>

      <div class="form-group">
          <div class="row">

        <label  class="col-md-2">Causal leave</label>
        
       <div class="col-lg-8">
        
          <input type ="text" name= "casual_leave" value="" class="form-control" placeholder="Casual_leave">
          
        </div>
        </div>
      </div>

      <div class="form-group">
          <div class="row">

        <label  class="col-md-2"> Medical_leave</label>
        
       <div class="col-lg-8">
        
          <input type ="text" name= "medical_leave" value="" class="form-control" placeholder="medical leave">
          
        </div>
        </div>
      </div>

      <div class="form-group">
          <div class="row">

        <label  class="col-md-2">Reason for leave</label>
        
       <div class="col-lg-8">
        
          <textarea class=" form-control"placeholder="reason for leave" rows="2" name="reason"></textarea>
          
        </div>
        </div>
      </div>

</div> 
				
		
                <div class="col-md-4 shadow " style="margin-top: 5vh; margin-left: 6vh;">
                    <div class="form-group ml-1" style=" padding-top: 3.5vh; padding-bottom:40px; background-color: #d9d9d9; padding-left:3vh;">
                      <h4>  Emp Leave List <a href ="emp_all_leave.php" class="btn btn-danger btn-md">View leaves</button></a></h4>
                	    <div class="checkbox">

			                    </div>
			                <label class="col-md-12">
                       

                                <?php
                	                 include("../config.php");
                	                 $table ='wesite';
                                     $my ="select * from `$table` where `role`= 'Employee' order by id desc";
                                     //echo $my; die;
                                     $run = mysqli_query($link,$my);
                                    while($row=mysqli_fetch_array($run)){
                                        echo'<div class="checkbox ml-2 " style="padding: 6px;">';
			                              echo'<input type ="checkbox"  name ="role[]" value="'.$row['id'].'">&nbsp;'.$row["name"].'&nbsp;</label>';
                                    //print_r($role["name"]); 

			                               

			                            echo'</div>'; 
			                        }
			                    ?>
                            </div>

                             <p style="text-align:right; margin-top: 30px;padding-bottom:px; "><button type ="submit"  name="submit" class="btn btn-md btn-danger" style="border-radius: 10px 3px 10px 3px; ">Submit</button></p>   
            </form>
        </div>
	
    </div>
  </div>


<?php
include_once('footer.php'); ?>

