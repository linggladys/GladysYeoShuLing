<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daisy Book Club</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- All the CSS styles -->
  <link href="css/header.css" rel="stylesheet">
  <link href="css/modallogin.css" rel="stylesheet">
  
  <!-- Familiy font-->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
  
  <!--Font Awesome Icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


</head>

<body>
<!-- Navigation -->
<header>
<nav id="customNav" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
	  <i class="fa fa-book"></i>
    Daisy Book Club
  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item px-lg-3">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i>
				Home
            </a>
			</li>
			<li class="nav-item px-lg-3">
			<a class="nav-link" href="book.php"><i class="fas fa-book-open" aria-hidden="true"></i> Book recommendation</a>
		  </li>
		  <li class="nav-item px-lg-3">
            <a class="nav-link nav-test"><i class="fas fa-user-shield"></i> Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!--end of nav header--!>
<!--Login modal pop up-->  
<div id="loginDialog" class="modal fade" aria-modal="true" tabindex="-1">
	<div class="modal-dialog" >
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Daisy Library Admin Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body text-center">
				<div class="icon-box">						
						<i class="fas fa-sign-in-alt"></i>
					</div>
				<form onsubmit="return validate()" action="loginvalid.php" method="post">
					<div class="form-group">
						<input type="text" id="uname" name="uname" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-dark btn-lg" value="Login">Login</button>
						<input type="hidden" name="loggedinex" value="true">
					</div>
				</form>				
				<p class="hint-text">Are you a user? Please click <a href="signup.php">here</a>!</p>
			</div>
		</div>
	</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--login modal-->
<script>
function validate(){
		var username = document.getElementById("uname");
		var password = document.getElementById("pass");
	
		if (username.value.trim()==""&&password.value.trim()==""){
			alert ("Please insert all the values!");
			return false;
		}
		
		else if(username.value.trim()=="")
		{
			alert("Please fill in username");
			return false;
		}
		
		else if (password.value.trim()=="")
		{
			alert("Please fill in password");
			return false;
		}
		
   }//end of validate

$(".nav-test").on("click", function (event) {         
            if ($(this).hasClass("disabled")) {
                event.stopPropagation()
            } else {
                $('#loginDialog').modal("show");
            }
        });//click as this pop-up modal will occur
</script>
</body>
</html>