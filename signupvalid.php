<?php include 'header2.php'?>
<?php
$email = $_POST['email'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$password = $_POST['password'];

if (!empty($email) || !empty($username) || !empty($gender) || !empty($password)){
	//write a code to check if those variables are not empty
	$host = "localhost";
	//mysql host name
	$dbUsername ="root";
	//mysql username
	$dbPassword = "";
	//mysql password name
	$dbname="daisydb";
	//database name
	
	//create connection
	$dbc = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
	//to display the errors
	if (mysqli_connect_error()){
	die ('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$SELECT = "SELECT email FROM tbl_register WHERE email = ? LIMIT 1";
		//email are unique
		//the ? is used in clarifying statement
		//limit means it must have at least 1 to select
		$INSERT = "INSERT INTO tbl_register (email,username,gender,password)
		values (?,?,?,?)";
		//the values here
		//this is used to ensure that user have a unique email
		//Prepare statement
		$stmt = $dbc->prepare($SELECT);
		$stmt->bind_param("s",$email);
		//question mark in a select query is replaced by this s-value 
		//email is a variable character which is a string
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		//those statements are used to retrieve a data from a column
		//which is email
		$rnum=$stmt->num_rows;
		//we store how many rows are selected
		//rnum stands for row number
		
		
		if($rnum==0){
			//if rnum is equal to zero then we close to previous statement
			//if rnum is not equals to zero, email is already in a database
			$stmt->close();
			
			//now we start a statement for the insert query
			$stmt=$dbc->prepare($INSERT);
			$stmt->bind_param("ssss", $email,$username,$gender,$password);
			//tie together to the parameters
			//note s stands for string
			$stmt->execute();
			//this code is used to ensure that users are signed in with a unique name
			echo '<div class="container-fluid">';
			echo "New record from sign up inserted successfully!<br />";
			echo 'You can do a review about your favourite books here, or whatever...';
			echo 'Click <a href="signup.php"> here </a> to start all over again.';
			echo '</div>';
		}else{
			echo '<div class="container-fluid">';
			echo "Someone already registered using this email <br />";
			echo 'Go back <a href="signup.php">here</a> to start all over again!';
		}
		$stmt->close();
		//we close the data query statement
		$dbc->close();
		//now close db connection
	}
	}else{
		echo "All fields are required";
		die();
//source: How to connect HTML Register Form to MySQL Database with PHP Code And Coins
}
?>