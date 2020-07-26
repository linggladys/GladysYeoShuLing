<?php
include 'header2.php';
?>
<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];
if (isset($_POST['loggedinex'])){
	if ($uname =="june" || $uname =="June"){
		if ($pass=="books" || $pass=="Books"){
		session_start();
		$_SESSION['uname']=$_POST['uname'];
		$_SESSION['loggedinex']=time();
		header ('Location: adminsuccess.php');
		exit();
		}else{
			print '<div class="container-fluid py-2">
			<div class="text-center">';
			echo "Invalid password";
		}
   }else{
	   echo'<div class="container-fluid py-2">
			<div class="text-center">';
	   echo "Invalid username";
   }
}
?>