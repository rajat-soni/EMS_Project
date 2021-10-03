<?php
require_once ('header.php');
?>
<div class="container">
	<div class="row ">
		
		<div class="col-md-3">
		</div>
		<div  class="col-md-6 shadow" style ="border: 1px dashed black; margin-top: 20px;
			"  class="shadow" >
			
			<?php
							
			if(isset($_SESSION['he'])){
				echo $_SESSION['he'];
				unset($_SESSION['he']);
			}
			if(isset($_SESSION['hel'])){
				echo $_SESSION['hel'];
				unset($_SESSION['hel']);
			}
			?>
			
			<form  class="well well-lg " class="shadow" method="POST" action="updatedata.php" enctype="multipart/form-data" onsubmit ="return update()" style="margin-bottom:20px; margin-top: 20px">
				<?php
				include("../config.php");
				$userid=$_GET['task_id'];
				//echo $userid;
				$run="select * from wesite where id ='$userid'";
                  //echo $run;
				$query =mysqli_query($link,$run);
				$row = mysqli_fetch_array($query);
				?>
				
				<div class="form-group">
					<h3 class ="text-center text-primary mark"><dd> Update user Details</dd></h3>
					<hr>
				
				
				<input type="hidden" name ="id" value="<?php echo $userid;?>" class="form-control" readonly>
			
					<label> Username</label>
					<input type ="text" class="form-control" name ="name" id ="name" value="<?php echo $row['name'];  ?>">
				</div>
				<div class="form-group">
					<label>Course &nbsp;</label><br>
					
				<input type ="checkbox"  name ="course[]" id ="course" value="MCA" <?php if($row['course']=='MCA'){echo"checked";}?>>&nbsp;MCA &nbsp;</label>
				<label class="checkbox"><input type ="checkbox"  name ="course[]" value="MBA" <?php if($row['course']=='MBA'){echo"checked";}?>>&nbsp;MBA&nbsp;</label>
				<lable class="checkbox"><input type ="checkbox"  name ="course[]" value="MSC" <?php if($row['course']=='MCS'){echo"checked";}?>>&nbsp;MSC &nbsp;<label>
				<label class="checkbox"><input type ="checkbox"  name ="course[]" value="M-tech"<?php if($row['course']=='M-tech'){echo"checked";}?>>&nbsp;M-tech&nbsp;</label >
			</div>
			<div class="form-group">
				<label>State</label>
				<select class="form-control" name ="state" id ="state">
					<option value ="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
					
				</select>
			</div>
			<div class="form-group">
				<label>City</label>
				<select class="form-control" name ="city" id="city">
					<option value ="<?php echo $row['city'];?>"><?php echo $row['city'];?></option>
					
				</select>
			</div>
			<div class="form-group">
				<label>Photos</label><br>
				<img src="../pic/<?php echo $row["image"];?>" style="width:50px; height:40px;"> 
				<input type ="file"  name ="image" value="<?php echo $row["image"];?>" id="image">
			</div>
			<div class="form-group">
				<label> Email</label>
				<input type ="email" id="email" class="form-control" name ="email" value="<?php echo $row['email'];?>">
			</div>
			<div class="form-group">
				<label>Passowrd</label>
				<input type ="password"  id = "password"class="form-control" name ="password">
			</div>
			
			<div class="form-group">
				<label>Department&nbsp;:&nbsp;</label>
				<label>
				<input type ="radio"  id ="department" name ="deparment" value ="SEO"<?php if($row['deparment']=='SEO'){echo"checked";}?>>&nbsp;SEO&nbsp; </label>
				<label>
				<input type ="radio"  name ="deparment" value="Developer" <?php if($row['deparment']=='Developer'){echo"checked";}?>>&nbsp;WEB-DEVELOPER &nbsp;</label>
			</div>
			<hr>
			<div class="form-group">
				<label>&nbsp;Role&nbsp;:&nbsp;</label>
				<label>
				<input type ="radio" id="role" name ="role" value ="Admin"<?php if($row['role']=='Admin'){echo"checked";}?>>&nbsp;Admin&nbsp;
			 </label>
				<label><input type ="radio"  name ="role" value="Employee"<?php if($row['role']=='Empolyee'){echo"checked";}?>>&nbsp;Empolyee&nbsp; 
				</label>
			</div>
			<input type ="submit" value ="update">
		</div>
		
		
	</form>
	<div class="col-md-3">
	</div>
</div>
</div>
<?php
include_once('footer.php'); ?>