
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ajax-Crud</title>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> 
	<script src="../js/Jquery-3.3.1.min.js"></script>
  <script type="text/javascript" href ="../js/bootstrap.min.js"></script>
   <script>



function check(){


var name = $("#name").val();
var city = $("#city").val();
var state = $("#state").val();
var image =$("#image").val();
var email = $("#email").val();
var password =$("#password").val();
var pass=$("#password").val().length; 




if(name == ""){
  alert( "User must not be Empty");
  return false;
}



if(state == ""){
  alert("Please select the state");
  return false;

}
if(city == ""){

  alert("Please select the city");
  return false;
}


if(image == ""){

  alert("select the imgage first ");
  return false;
}


if(email == ""){

  alert(" Email must not be empty!");
  return false;
}

if(password ==""){

  alert( "Password must not be empty!");
  return false;
}

if(pass<5 || pass>10){
  alert("password must be 5  or not more tha character or digit!");

  return false;
}




}
</script>



</head>
<body>
  <div class="container-fixed">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container-fluid">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><span style="color:blue;">E</span><span style="color:yellow;" >M</span><span style="color:red;">S</span>&nbsp; &nbsp;||</a>
     
     <ul class=" nav navbar-nav  navbar-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admindashbord.php">&nbsp;Dashbord&nbsp; &nbsp; &nbsp;</a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="signup.php">&nbsp;Signup Page&nbsp; &nbsp; &nbsp;</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Leave.php">&nbsp;Leave Page &nbsp; &nbsp; &nbsp;</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Task.php">&nbsp;Task Page&nbsp; &nbsp;</a>
      </li>
       
      

      </ul>
        
       <ul class=" nav navbar-nav  navbar" >
     
      <p ><li class="nav-item active" >
        <a class="nav-link" href="Logout.php"  ><span >Logout</span></a>
      </li>
       <li class="nav-item" >
        <h5 style="padding-left: 65vh ;"><a class="nav-link" href="#" >Welcome to  Admin <?php if($_SESSION['role'] == 'Admin'){ echo $_SESSION['email'];}else{header("location:login.php");}?></a></h5>
      </li></h3> 
    </p>
          
    </ul>
    
  </div>
</div>
</nav>

 