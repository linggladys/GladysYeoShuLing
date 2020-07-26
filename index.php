<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daisy Book Club</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- All the CSS styles -->
  <link href="css/header.css" rel="stylesheet">
  <link href="css/index2.css" rel="stylesheet">

  
  <!-- Familiy font-->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
  
  <!--Font Awesome Icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<body>
<!-- Navigation -->
<?php include 'header.php';?>
<!--end of nav header-->
<section id="carousel">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/wadada.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-center">
                <h1>Welcome!</h1>
				<br>
				<p class="carousel-tiny-text">We hope you like our book review website!</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/header.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-center">
                <h1>Our blogs</h1>
                <p><a class="btn btn-lg btn-dark" href="#blog" role="button">View more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/library2.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-center">
                <h1>About us</h1>
                <p><a class="btn btn-lg btn-dark" href="#about" role="button">Browse more</a></p>
              </div>
            </div>
          </div>
		 <!--the previous and next buttons from carousel-->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div></section>
<!--Content-->
<!--Section 3 (Cards of news)-->
<section id="blog">
<div class="container-fluid">
    <div class="featurette-header mb-2 py-1"> </div>
	<h2 class="featurette-heading mb-2">Our blog</h2>
      <div class="row featurette p-3">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="images/small1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Most trending reads this July</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
</div>
<!-- Card footer -->
 <div class="card-footer">
  <div class="text-center py-1">
    <ul class="list-inline">
      <li class="list-inline-item pr-1"><i class="far fa-clock pr-1"></i>28/05/2020</li>
      <li class="list-inline-item pr-1"><a href="#" class="custom-link"><i class="far fa-comments pr-2"></i>12</a></li>
      <li class="list-inline-item pr-1"><a href="#" class="custom-link"><i class="fab fa-facebook-square pr-2">
          </i>
		 </a>
		</li>
      <li class="list-inline-item pr-1"><a id="clickMe" href="#" class="btn btn-sm btn-dark" onclick="doFunction();">Read More!</a></li>
    </ul>
  </div>
 </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="images/small1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Interview with J.K Rowling</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
          </div>
 <!-- Card footer -->
 <div class="card-footer">
  <div class="text-center py-1">
    <ul class="list-inline">
      <li class="list-inline-item pr-1"><i class="far fa-clock pr-1"></i>28/05/2020</li>
      <li class="list-inline-item pr-1"><a href="#" class="custom-link"><i class="far fa-comments pr-2"></i>12</a></li>
      <li class="list-inline-item pr-1"><a href="#" class="custom-link"><i class="fab fa-facebook-square pr-2">
          </i>
		 </a>
		</li>
      <li class="list-inline-item pr-1"><a id="clickMe" href="#" class="btn btn-sm btn-dark" onclick="doFunction2();">Read More!</a></li>
    </ul>
  </div>
 </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="images/small1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Action Recommendations</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
 <!-- Card footer -->
 <div class="card-footer">
  <div class="text-center py-1">
    <ul class="list-inline">
      <li class="list-inline-item pr-1"><i class="far fa-clock pr-1"></i>28/05/2020</li>
      <li class="list-inline-item pr-1"><a href="#" class="custom-link"><i class="far fa-comments pr-2"></i>12</a></li>
      <li class="list-inline-item pr-1"><a href="#" class="custom-link"><i class="fab fa-facebook-square pr-2">
          </i>
		 </a>
		</li>
      <li class="list-inline-item pr-1"><a id="clickMe" href="#" class="btn btn-sm btn-dark" onclick="doFunction3();">Read More!</a></li>
    </ul>
  </div>
 </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Section 4 (About us article page)!-->
<section id="about">
<div class="container-fluid">
    <div class="featurette-header mb-2 py-1"> </div>
      <div class="row featurette p-3">
	  	
        <div class="col-md-9">
          <h2 class="featurette-heading mb-2">About us</h2>
          <p class="lead py-2">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
		<div class="col-md-3">
          <img class="featurette-image img-fluid p-5 mb-3" src="images/stack.jpg" alt="Generic placeholder image" title="Pile of books">
        </div>
      </div>
</div>
</section>
<?php
include 'footer.html';
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
document.getElementById("clickMe").onclick = 
	function doFunction(){ 
	alert('Blog page in progress, please wait.'); 
	}//end of doFunction
	
	function doFunction2(){ 
	alert('Blog page in progress, please wait.'); 
	}//end of doFunction2
	
	function doFunction3(){ 
	alert('Blog page in progress, please wait.'); 
	}//end of doFunction3
	
 $('.carousel').carousel({
    interval: 2500,
    keyboard: true,
    pause: 'hover'
   })

</script>
<!--add this to the top to get the pop up modal look!-->
</body>
</html>
