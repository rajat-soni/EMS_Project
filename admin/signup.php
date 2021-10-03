<?php
require_once ('header.php');
?>

<div class="container">
	<div class="row">
	
			<div class="col-md-3">
			</div>
			<div  class="col-md-6 shadow" style ="border: 1px dashed black; margin-top: 20px; 
			"  >
                 
                 <?php
                       if(isset($_SESSION['eror'])){

	                   echo $_SESSION['eror'];
	                   unset($_SESSION['eror']);
                       }
                    ?> 

				<form  method="POST" action="signupdata.php" enctype="multipart/form-data"   onsubmit = "return check()" style="margin-bottom:20px; margin-top: 20px">


				<div class="form-group">
					<h3 class ="text-center text-info"> Registration Form</h3>
					<hr>
					<label> Username</label>
					<input type ="text" class="form-control" name ="name" id ="name" placeholder="username" >
				</div>
				<div class="form-group">
					<label>Course &nbsp;</label><br>
					<label class="checkbox">
					<input type ="checkbox"  name ="course[]"  id="course" value="MCA">&nbsp;MCA &nbsp;</label>
					<label class="checkbox"><input type ="checkbox"  name ="course[]" value="MBA">&nbsp;MBA&nbsp;</label>
					<lable class="checkbox"><input type ="checkbox"  name ="course[]" value="MSC">&nbsp;MSC &nbsp;<label>
					<label class="checkbox"><input type ="checkbox"  name ="course[]" value="M-tech">&nbsp;M-tech&nbsp;</label >
				</div>
				<div class="form-group">
					<label>State</label>
					<input type="text" name ="state" id="state" placeholder="state" class="form-control">
				</select>
			</div>
			<div class="form-group">
				<label>city</label>
				<input type= "text" name ="city" placeholder="city" id="city" class="form-control"> 
		</div>
		<div class="form-group">
			<label>Photos</label><br>
			<input type ="file"  name ="image"  id="image">
		</div>
		<div class="form-group">
			<label> email</label>
			<input type ="email"  id ="email"class="form-control" name ="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label> passowrd</label>
			<input type ="password" id ="password" class="form-control" name ="password" placeholder="current-password">
		</div>
         
		<div class="form-group">
			<label><strong>Department&nbsp;:&nbsp;</strong></label>
			<label>
			 <input type ="radio"  required  name ="deparment" value ="SEO" >&nbsp;SEO&nbsp; </label><br>
			<label>
			<input type ="radio"  required   name ="deparment" value="webdeveloper" style=" margin-left:107px;" >&nbsp;WEB-DEVELOPER &nbsp;</label>
</div>
<hr>
<div class="form-group">
			<label><strong>&nbsp;Role&nbsp;:&nbsp;</strong></label>
			<label>
			 <input type ="radio"  required  name ="role" value ="Admin">&nbsp;ADMIN&nbsp;</label><br>

			<label><input type ="radio"  required name ="role" value="Employee" style=" margin-left:55px;">&nbsp;EMPOLYEE&nbsp; </label>

</div>

		<input type ="submit" value ="submit" name="submit">
	</div>
	
		
</form>
	<div class="col-md-3">
	</div>
</div>
</div>


<?php
include_once('footer.php'); ?>
