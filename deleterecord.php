<body>
<!-- Navigation -->
<?php
include 'adminheader.php'
?>
<!--end of nav header-->
<div class="container">
<?php
$dbc = mysqli_connect('localhost','root','');
mysqli_select_db($dbc,'daisydb');

if (isset($_GET['id']) && is_numeric($_GET['id'])){
	$query = 'SELECT username, email FROM tbl_register WHERE id ='.$_GET['id'].'';


if ($r=mysqli_query($dbc,$query)){
	$row = mysqli_fetch_array($r);
	
	print '<div class="container-fluid">
	<form action="deleterecord.php" method="post">
	<h2>Delete this entry?</h2>
	<p><h3>'.$row['username'].'</h3>'.$row['email'].'<br/>
	<input type="hidden" name="id" value="'.$_GET['id'].'"/>
	<input type="submit" class="btn-primary" name="submit" value="delete it"/></p>
	</form>';
	
}else{
	print'<p style="color:red;">Could not retrieve blog entry because:<br/>'.mysqli_error($dbc);
	}
}

elseif(isset($_POST['id']) && is_numeric ($_POST['id'])){
	$query = "DELETE FROM tbl_register WHERE id={$_POST['id']} LIMIT 1";
	$r = mysqli_query ($dbc, $query);
	
	if (mysqli_affected_rows($dbc) == 1){
		print '<p><br><br>The blog entry has been deleted.</p>
		Click <a href="loginsuccess.php"> here</a> to continue';
	}else{
		print '
		<p><br><br>Could not delete because <br/>:';
	}
}	

else{
	print '<p style="color: red;">This page has been accessed in error.</p>';
}
mysqli_close($dbc);
?>
</div>
</body>
