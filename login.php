<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daisy Book Club Login</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- All the CSS styles -->
  <link href="css/header.css" rel="stylesheet">
  <link href="css/business-frontpage.css" rel="stylesheet">
  <link href="css/signupandlogin.css" rel="stylesheet">
  
  <!-- Familiy font-->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
  
  <!--Font Awesome Icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  
  <!--Script function-->
  <script type="text/javascript">
	function over(){
		document.getElementById("sideimg").src="images/sideimage3.jpg";
		}//end of over()
		
	function out(){
		document.getElementById("sideimg").src="images/sideimage2.jpg";
	    }//end of out()
	
	function validate(){
		var username = document.getElementById("uname");
		var password = document.getElementById("pass");
	
		if (username.value.trim()==""&&password.value.trim()==""){
			document.getElementById("lbblank").style.visibility="visible";
			//alert ("Please insert all the values!");
			return false;
		}
		
		else if(username.value.trim()=="")
		{
			//alert("Blank username");
			document.getElementById("lbuname").style.visibility="visible";
			return false;
		}
		
		else if (password.value.trim()=="")
		{
			//alert("Blank password");
			document.getElementById("lbpass").style.visibility="visible";
			return false;
		}
		
		else if (password.value.trim().length<5)
		{
			alert ("Sorry, password length must be more than or equal to 5 characters.");
			return false;
		}
		
		else{
			alert ("Ok, sign up success!");
			return true;
	}
   }//end of validate()
	
</script>

</head>

<body>

<!-- Navigation -->
<?php
require 'header.html'
?>
<!--end of navigation-->
<!--Login form-->
<div class="container">
<div class="row no-gutters">
<div class="col-md-6 d-none d-md-block">
<img src="images/sideimage2.jpg" class="img-fluid" style="min-height:100%;" id="sideimg" onmouseover="over()" onmouseout="out()"/>
</div>
<div class="col-md-6 bg-white p-4 ">
<h3>Members Login Form</h3>
<div class="form-style py-3">
  <form onsubmit="return validate()" action="loginvalid.php" method="post">
   <label id="lbblank" style="color:red;visibility:hidden;">Please fill in all form!</label>
  <div class="form-group pb-3">   
    <input type="username" placeholder="Username" class="form-control" name="uname" id="uname">
	<label id="lbmail" style="color:red; visibility:hidden;">Please fill in your email!</label>
  </div>
<div class="form-group pb-3">   
    <input type="password" placeholder="Password" class="form-control" name="pass" id="pass">
	<label id="lbpass" style="color:red; visibility:hidden;">Please fill in your password!</label>
  </div>
  <div class="pb-2">
  <button onclick="return validate()" type="submit" class="btn btn-dark w-100 mt-2">Login</button>
  <input type="hidden" name="loggedinex" value="true">
   </div>
	<div class="pt-4 text-center">
		Click <a href="signup.php">here</a> to sign up if you're <span class="text-muted">new</span> here.
		<hr>
		Are you an admin? Please click <a href="adminlogintest.php">here</a>
		</div>
	</form>
	</div>
  </div>
 </div>
</div>
</section>

<!--end of form-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

