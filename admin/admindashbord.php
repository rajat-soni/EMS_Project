<?php

include("header.php");


echo'<div class="container-fixid pb-3" style="background-color:#51d6a8">';

echo "<h3 class=' pt-3 pb-3 text-center bg-dark text-light mt-2 display-5 font-italic'><dd><span>Welcome</span> to <span>Admin </span><span>Part</span></dd></h3><hr>";

echo'<form action="delete.php" method="POST" enctype="multipart/form-data">';




echo '<h2 class=" text-muted mt-3 mb-2 display-5" style=""><dd>Employee Record </dd></h2>';


 echo '<table class="table table-hover shadow bg-dark table-responsive pb-4">';
 echo '<thead>';
 echo   '<tr class="text-center text-light">';
 echo'<button type ="submit" value="delete" name="delete" class="mt-2 mb-2 btn btn-danger btn-md">Delete</button> ';

 echo '<th></th>';
 echo     '<th scope="col text-light">S.NO</th>';
 echo     '<th scope="col">Username</th>';
 echo     '<th scope="col">Course</th>';
 echo     '<th scope="col">State</th>';
 echo     '<th scope="col">city</th>';
 echo     '<th scope="col">Photos</th>';
 echo     '<th scope="col">Email</th>';
 echo     '<th scope="col">Password</th>';
 echo     '<th scope="col">Department</th>';
  echo    '<th scope="col">Role</th>';
 echo     '<th scope="col">Action</th>';
 echo     '</tr>';
 echo     '</thead>';


 //---------  Delete error showing session --------------//

        if(isset($_SESSION['error'])){
           echo $_SESSION['error'];
           unset($_SESSION['error']);

        }

        if(isset($_SESSION['delete'])){
           echo $_SESSION['delete'];
           unset($_SESSION['delete']);

        }
  
//---------End session--------- // 

  
      
      if(isset($_SESSION['he'])){
          echo $_SESSION['he'];
          unset($_SESSION['he']);
      }
      
      if(isset($_SESSION['hel'])){
          echo $_SESSION['hel'];
          unset($_SESSION['hel']);
      }
      
//--------------  signup session--------- //                     

       if(isset($_SESSION['signup'])){
        echo $_SESSION['signup'];
        unset($_SESSION['signup']);
                       }


      
  include("../config.php");
  $table = 'wesite';
  $my ="select * from `$table`";
  $run = mysqli_query($link,$my);
  $no =1;

  while($row=mysqli_fetch_array($run)){
      
      echo '<tbody>'; 
     
    echo  '<tr class="text-light">';

             echo "<td><input type='checkbox' class='checkbox' name ='chk[]' value='".$row['id']."'</td>";
             echo  '<td>'.$no.'</td>';
	           echo  '<td>'.$row['name'].'</td>';
	           echo  '<td>'.$row['course'].'</td>';
	           echo  '<td>'.$row['state'].'</td>';
      			 echo	 '<td>'.$row['city'].'</td>';
             echo  '<td><img src="../pic/'.$row["image"].'" style="width:50px;  height:40px;"</td>';
      			 echo	 '<td>'.$row['email'].'</td>';
      			 echo	 '<td>'.$row['password'].'</td>';
      			 echo	 '<td>'.$row['deparment'].'</td>';
      			 echo	 '<td>'.$row['role'].'</td>';
      			 echo	 '<td><a href="edit.php?task_id='.$row['id'].'">Edit</a><td>'; 


    		echo'</tr>';
    		$no++;
  }
   
  
 echo'</tbody>'; 
echo'</table
>'; 
echo'</form>';

?>
</div>
</div>
</div>
</div>
<?php    include 'footer.php';?>