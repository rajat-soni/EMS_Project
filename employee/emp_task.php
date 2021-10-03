<?php
include("header.php");
require_once("../auth/auth.php");

 echo'<div class="container-fluid" style="background-color:#51d6a8">';

echo'<div class="container">';
echo'<h3 class= " pt-3 text-muted"style="font-size:20px; text-align:right;"> Welcome  to your profile &nbsp;'.$_SESSION['email'].' !</h3>';
echo'<hr>';
	echo'<div class="row">';
		echo'<div class="col-md-12">';
		echo'<p class=" pl-4 text-info text-muted display-4 mt-4 bg-light text-dark pt-3 pb-3" style="">EMPOLYEE LIST</p>';
		echo'<p class="pt-2"><hr></p>';

	
			echo '<table class="table table-hover shadow table-bordered mt-4 bg-light">';
				echo '<thead>';
					echo   '<tr class="text-center text-muted">';

						echo     '<th scope="col-md-1">S.NO</th>';
						echo     '<th scope="col-5">Task</th>';
						echo     '<th scope="col-2">Date</th>';
						echo     '<th scope="col-1">Action</th>';

					echo     '</tr>';
				echo     '</thead>';

              include'../config.php';
              
              $my ="select * from task where user_id = '".$_SESSION['user_id']."'"; // $_session['user_id ']contain emp login id //
              //print_r($_SESSION['user_id']);
                    $run = mysqli_query($link,$my);
                    $count=mysqli_num_rows($run);
                    //if($count>0){
                    $no =1;
                    while($row=mysqli_fetch_array($run)){

                     echo'<tbody>';
                     echo'<tr>';
                     echo'<td>' .$no.'</td>';
                     echo'<td>'.substr($row['mesaage'],0 ,300).'</td>';
                     echo'<td>'.$row['date&time'].'</td>';
                     echo'<td><a href="emp_view.php?task_id='.$row['task_id'].'">View</a></td>';
                     echo'</tr>';
                       $no++;
                       }
                    //}

                    echo'</tbody>';
                    echo'</table>';
                    ?>
                    	
		
<?php include("footer.php");?>
