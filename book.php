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
  <link href="css/book.css" rel="stylesheet">

  
  <!-- Familiy font-->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
  
  <!--Font Awesome Icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>

<body>

<!-- Navigation -->
<?php include 'header.php';?>
<!--end of nav header--!>
<!--Content-->
<!--Section 1 (Carousel)-->
<section id="recommend">
<div class="container-fluid">
	<div class="pb-2 my-2">
		<h2 class="text-center">Book recommendations!</h2>
		<p class="text-center">Here are the books we recommend for readers to read!</p>
	</div>
</div>
</section>
<!--Carousel -->
<section id="carouselofbooks">
<div class="py-2">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1" class=""></li>
  </ul>
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="images/book2.jpg">
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="images/book2.jpg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="images/book2.jpg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="images/book2.jpg">
      </div>  
    </div>
    <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="images/book3.jpg">
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="images/book3.jpg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="images/book3.jpg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="images/book3.jpg">
      </div>  
    </div>
    </div>
  </div>
</div>
</section>
<!--end of carousel-->
<!--Content-->
<!--Section 2 (Book of the month page)!-->
<section id="monthbook">
    
<div class="container-fluid">
    <div class="featurette-header mb-2 py-1"> </div>
      <div class="row featurette p-3">
        
<div class="col-md-4">
          <h2 class="featurette-heading mb-2">Book of the month</h2>
		  <h3 style="color:grey">The School of Good and Evil:One True King</h3>
          <p class="lead py-2">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
<div class="py-0 pb-3">
<a href="bookdetail.php" class="btn btn-outline-dark">View in details</a>
			</div>
        </div>
<div class="book-img col-md-2">
          <img class="featurette-image img-fluid pb-4 pr-1" src="images/book1.jpg" alt="Generic placeholder image" title="A generic book placeholder">
        </div>
		
<div class="col-md-4">
          <h2 class="featurette-heading mb-2">Top pick</h2>
		  <h3 style="color:grey">Lateral Thinking</h3>
          <p class="lead py-2">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
<div class="py-0 pb-3">
<a href="#" class="btn btn-outline-dark" id="details" onclick="doFunction4();">View in details</a>
			</div>
        </div>
<div class="col-md-2">
          <img class="featurette-image img-fluid pb-3 pr-2" src="images/book4.jpg" alt="Generic placeholder image" title="A generic book placeholder">
        </div>
      </div>

</div>
</section>
<!--Section 3 (Staff reads)-->
<section id="ratedbystaff">
<div class="container-fluid">
    <div class="featurette-header mb-2 py-1"> </div>
      <h2 class="featurette-heading mb-2">Staff reads</h2>
		<div class="row featurette p-3">
          <div class="col-lg-3 col-md-6  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/bookcard1.jpg" alt="placeholder"></a>
              <div class="card-body staff-read-body">
                <h4 class="card-title">Next Of Kin: My Conversations With Chimpanzees</h4>
                <h5 class="card-subtitle">Read by Charlotte</h5>
                <p class="card-text pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer staff-read text-center">
                <span style="color: white">Rating: <span class="text-warning">★ ★ ★ ★ ☆</span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/bookcard2.jpg" alt="placeholder"></a>
              <div class="card-body staff-read-body">
                <h4 class="card-title">Harry Potter and the Philosopher's Stone</h4>
                <h5 class="card-subtitle">Read by Hermione</h5>
                <p class="card-text pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer staff-read text-center">
                <span style="color: white">Rating: <span class="text-warning">★ ★ ★ ★ ★</span></span>
              </div>
            </div>
          </div>

         <div class="col-lg-3 col-md-6  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/bookcard3.jpg" alt="placeholder"></a>
              <div class="card-body staff-read-body">
                <h4 class="card-title">Let's Read with Dora!</h4>
                <h5 class="card-subtitle">Read by Dora</h5>
                <p class="card-text pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer staff-read text-center">
                <span style="color: white">Rating: <span class="text-warning">★ ★ ★ ★ ☆</span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/bookcard4.jpg" alt="placeholder"></a>
              <div class="card-body staff-read-body">
                <h4 class="card-title">Rebels: City of Indra</h4>
                <h5 class="card-subtitle">Read by Kim</h5>
                <p class="card-text pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer staff-read text-center">
                <span style="color: white">Rating: <span class="text-warning">★ ★ ☆ ☆ ☆</span></span>
              </div>
            </div>
          </div>
</div>
</section>
<!-- Footer -->
<?php include 'footer.html';?>
<!--end of footer-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
document.getElementById ("details").onclick=
	function doFunction4(){
		alert ('Book details in progress, please wait');
	}//end of doFunction4
</script>
</body>
</html>