<?php
require_once ('header.php');


echo'<div class="container-fluid" style="background-color:#51d6a8">';

echo'<div class="container">';
echo'<h3 class= " pt-3 text-muted"style="font-size:20px; text-align:right;">  !</h3>';
echo'<hr>';
	echo'<div class="row">';
		echo'<div class="col-md-12">';
		echo'<p class=" pl-4 text-info text-muted display-4 mt-4 bg-light text-dark pt-3 pb-3" style="">EMPOLYEE LEAVE LIST</p>';
		echo'<p class="pt-2"><hr></p>';

	
			echo '<table class="table table-hover shadow table-bordered mt-4 bg-light">';
				echo '<thead>';
					echo   '<tr class="text-center text-muted">';

						echo     '<th scope="col-md-1">S.NO</th>';
						echo     '<th scope="col-5">leave from</th>';
                        echo     '<th scope="col-5">leave to</th>';
                        echo     '<th scope="col-5">Earning leave</th>';
                        echo     '<th scope="col-5">Casual leave</th>';
                        echo     '<th scope="col-5">Medical leave</th>';
                        echo     '<th scope="col-5">Reason</th>';
						
						echo     '<th scope="col-1">Action</th>';

					echo     '</tr>';
				echo     '</thead>';

              include'../config.php';
              $my ="select * from  leave_task"; // $_session['user_id ']contain emp login id //
    

                    $run = mysqli_query($link,$my);
                    $count=mysqli_num_rows($run);
                    if($count>0){
                    $no =1;
                    while($row=mysqli_fetch_array($run)){


                     echo'<tbody>';
                     echo'<tr>';
                     echo'<td>' .$no.'</td>';
                     echo'<td>'.$row['vaild_from'].'</td>';
                     echo'<td>'.$row['vaild_to'].'</td>';

                     echo'<td>'.$row['Earning_leave'].'</td>';
                     echo'<td>'.$row['causal_leave'].'</td>';
                      echo'<td>'.substr($row['reason'],0 ,150).'</td>';
                   
                     echo'<td><a href="leave_view.php?leave_id='.$row['leave_id'].'">View</a>&nbsp;
                     <a href="delete.php?leav_id='.$row['leave_id'].'">Delete</a></td>';
                     echo'</tr>';
                  
                       $no++;
                       
                       }
                    }

                    echo'</tbody>';
                    echo'</table>';
                    ?>