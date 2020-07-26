<?php
if ($dbc = mysqli_connect("localhost","root","")){
	print '<p>Successfully connected to MYSQL!</p>';
	$query = "CREATE DATABASE daisydb";
	
	if(mysqli_query($dbc, $query)){
		echo "<p>The database has been created!</p>";
	}
	else{
		echo "<p style='color:red;'>Could not create the database because:
		<br>.mysqli_error().'.</p>";
	}
}
else{
	print '<p style="color: red;">Could not connect to MySQL.</p>';
}
?>