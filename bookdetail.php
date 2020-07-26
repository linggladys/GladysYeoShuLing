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
  <link href="css/book.css" rel="stylesheet">

  
  <!-- Familiy font-->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
  
  <!--Font Awesome Icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  
  <!--This is CSS for the addstar function-->
  <style>
	.checked {
    color:silver;
	}
  </style>

</head>
<body>

<!-- Navigation -->
<?php include 'header.php';?>
<section id="bookdetail">
<div class="container-fluid">
    <div class="row featurette p-3">
	 <div class="col-md-3">
        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="images/book1.jpg" title="a book placeholder" alt="Generic book placeholder">
          <div class="card-body">
            <h3 class="card-title">Book Name</h3>
            <h4>$24.99</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint 
			aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
			<hr>
			<h5 class="text-center">Please rate the book</h5>
			<div class="text-center">
              <span class="fa fa-star" id="star1" title="I totally dislike it" onclick="addstar(this,1)"></span>
			  <span class="fa fa-star" id="star2" title="I dislike it" onclick="addstar(this,2)"></span>
              <span class="fa fa-star" id="star3" title="I like it" onclick="addstar(this,3)"></span>
              <span class="fa fa-star" id="star4" title="I totally like it" onclick="addstar(this,4)"></span>
              <span class="fa fa-star" id="star5" title="I love it!" onclick="addstar(this,5)"></span>
			  </div>
		  <hr>
			<div id="myDropDown" class="dropdown text-center mb-2 p-4">
				<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Want to read
				</button>
				<div class="dropdown-menu">
				<a class="dropdown-item" >Currently reading</a>
				<a class="dropdown-item" >Add to read list</a>
				</div>
			</div>
		 </div>
		</div>
	</div>
        <!-- /.card -->
      <div class="col-md-9">
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Readers Reviews
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success" id="review" onclick="doFunction5();">Leave a Review</a>
          </div>
        </div>
      </div>
      <!-- /.col-lg-3 -->
    </div>
</div>
</section>
<!-- Footer -->
<?php include 'footer.html';?>
<!--end of footer-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script>
function addstar(ths,starno){
	for (var i=1;i<=5;i++){
		var cur=document.getElementById("star"+i)
		cur.className="fa fa-star"
	}//to click on the stars (I assume)

	for (var i=1;i<=starno;i++){
		var cur=document.getElementById("star"+i)
		if(cur.className=="fa fa-star")
		{
		cur.className="fa fa-star checked"
		}//fill in the stars
	}
 }//end of function addstar
 
document.getElementById("review").onclick=
	function doFunction5(){
		alert ('Review page in progress, please wait');
	}//end of dofunction5()
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });//enable the dropdown function to appear
</script>
</body>
</html>