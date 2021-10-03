<?php
require_once ('header.php');
?>


<div class="container">
	<div class="row">
	
			<div class="col-md-3">
			</div>
			<div class="col-md-6 shadow" style ="border: 1px dashed black; margin-top: 20px; 
			" >
			<?php
                session_start();
                if(isset($_SESSION['helo'])){

                    echo $_SESSION['helo'];
                    unset($_SESSION['helo']);
                }
                 if(isset($_SESSION['emp'])){

                    echo $_SESSION['emp'];
                    unset($_SESSION['emp']);
                }

            ?>

				<form  method="POST" action="logindata.php" style="margin-bottom:20px; margin-top: 20px">
				<div class="form-group"  onsubmit ="return validation()">
					<h3 class ="text-center text-info"> Login Form</h3>
					<hr>
					
		<div class="form-group">
			<label> email</label>
			<input type ="email" class="form-control" name ="email" id ="email">
		</div>
		<div class="form-group">
			<label> passowrd</label>
			<input type ="password" class="form-control" name ="password" id="password">
		</div>
         
		

		<input type ="submit" value ="submit"  name="submit" onsubmit ="return validation()">
	
		
	</div>
</form>
	<div class="col-md-3">
	</div>
</div>
</div>


<?php
require_once ('footer.php');

?>