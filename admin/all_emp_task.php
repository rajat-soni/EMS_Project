
<?php
    require_once ('header.php');


        echo'<div class="container-fluid" style="background-color:#51d6a8">';

        echo'<div class="container">';
        echo'<h3 class= " pt-3 text-muted"style="font-size:20px; text-align:right;"></h3>';
        echo'<hr>';
        echo'<div class="row">';
        echo'<div class="col-md-12">';
        echo'<p class=" pl-4 text-info text-muted display-4 mt-4 bg-light text-dark pt-3 pb-3" style="">EMPOLYEE LIST</p>';
        echo'<p class="pt-2"><hr></p>';

            if(isset($_SESSION['del'])){
                echo $_SESSION['del'];
                unset($_SESSION['del']);

            }
        echo'<form action ="del.php" method="post">';
        echo'<button type ="submit" value="delete" name="del" class="mt-2 mb-2 btn btn-danger btn-md">Delete</button> '; 
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
              $my ="select * from task"; // $_session['user_id ']contain emp login id //


                    $run = mysqli_query($link,$my);
                    $count=mysqli_num_rows($run);
                    if($count>0){
                    $no =1;

                    while($row=mysqli_fetch_array($run)){


                     echo'<tbody>';
                     echo'<tr>';
                     echo "<td><input type='checkbox' class='checkbox' name ='chk[]' value='".$row['task_id']."'</td>";
                     echo'<td>' .$no.'</td>';
                     echo'<td>'.substr($row['mesaage'],0 ,150).'</td>';
                     echo'<td>'.$row['date&time'].'</td>';
                     echo'<td><a href="emp_view.php?task_id='.$row['task_id'].'">View</a></td>';
                     echo'</tr>';
                 
                       $no++;
                       }
                    }
                    echo'</form>';
                    echo'</tbody>';
                    echo'</table>';
?>