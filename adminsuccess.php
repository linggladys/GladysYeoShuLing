<body>
<!-- Navigation -->
<?php
require 'adminheader.php'
?>
<!--end of nav header-->
<div class="container">
<?php
	session_start();
	echo $_SESSION['uname'].", here is the page where you can delete users' registration";
?>
<?php
$dbc = mysqli_connect('localhost','root','');
mysqli_select_db($dbc, 'daisydb');

$query = 'SELECT * FROM tbl_register ORDER BY username DESC';

if ($r = mysqli_query($dbc,$query)){
	while ($row = mysqli_fetch_array($r)){
		print"<p><h3>{$row['username']}</h3>{$row['email']}<br />
		<a href=\"deleterecord.php?id={$row['id']}\">Delete</a>
		</p><hr />\n";
	}
}else{
		print '<p style="color: red;">Could not retrieve the data because:<br />'.mysqli_error($dbc).'.</p>
		<p>The query being run was:'.$query.'</p>';
}
mysqli_close($dbc);

?>
</div>
</body>
