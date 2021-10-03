
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ajax crud</title>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  
	<script src="../js/Jquery-3.3.1.min.js"></script>
  <script type="text/javascript" href ="../js/bootstrap.min.js"></script>
  <script>

  function validation(){

var email = $("#email").val();
var password =$("#password").val();
var pass=$("#password").val().length; 

if(email == ""){

  alert(" Email must not be empty!");
  return false;
}

if(password ==""){

  alert( "Password must not be empty!");
  return false;
}

if(pass<5){
  alert("password must be 5 character!");

  return false;
}

}
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><span style="color:blue;">E</span><span style="color:yellow;" >M</span><span style="color:red;">S</span>&nbsp; &nbsp;||</a>
     
     <ul class=" nav navbar-nav  navbar-auto">
      <li class="nav-item active">
        <a class="nav-link" href="empdashbord.php">&nbsp;Dashbord&nbsp; &nbsp; &nbsp;||</a>
      </li>
       
      <li class="nav-item active">
        <a class="nav-link" href="Leave.php">&nbsp;Leave Page &nbsp; &nbsp; &nbsp;||</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="emp_task.php">&nbsp;Task Page&nbsp; &nbsp;||</a>
      </li>
      </ul>
        
        <ul class=" nav navbar-nav  navbar-right">
     
      <li class="nav-item active">
        <a class="nav-link" href="../login.php">Logout</a>
      </li>
          
    </ul>
   
    
  </div>
</nav>

  