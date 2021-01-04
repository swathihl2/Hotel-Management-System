

<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hsm"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 

$user=$_POST['name'];
$address=$_POST['Address'];
$phone=$_POST['Phone'];
$email=$_POST['email'];
$password=$_POST['Password'];

$sql = "CREATE TABLE IF NOT EXISTS client(
	name varchar(50) ,
	address varchar(50),
	phone varchar(13) ,
	email varchar(50),
	password varchar(50),
	primary key(name,phone)
	);"; 
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
if ($errorr){
	echo $errorr;
	$conn.die();
	}

$sql = "insert into client values('$user','$address','$phone','$email','$password');";  
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Status</title>
</head>
<body background="#91FF33" bgcolor="#D8BFD8">
<link rel="stylesheet" type="text/css" href="./css.css">
<h1>
	<?php

if ($errorr)
	 {
	 	$sql = "select * from client where name='$user' or phone='$phone';";  
		$result = mysqli_query($conn, $sql);
		if(mysqli_error($conn))
		{
			echo '<h1>Sorry Can\'t register at this movement Check for error below</h1><br>';
			echo $errorr;
		}
		else {
			echo '<h1 style="color:red">User '.$user.' Already Registered</h1>
			';
		}
		

		//$conn.die();
	}
else{
	//$Nrows=mysqli_num_rows($result);
	//echo $Nrows;
	//$errorr=mysqli_error($conn);
	//echo $errorr;
	echo '<h1 style="color :green;">'.$user.' Thank You for Registering</h1>';
	//$result=mysqli_fetch_assoc($result);
	}


mysqli_close($conn);
//header('location:./loginShome.php');

//session_start();

?>
<button onclick="window.location.href=\'createC.php\'"><a href="createC.php">Back</a></button>
			<button onclick="window.location.href=\'indexC.php\'"><a href="indexC.php">Login</a></button>
</h1>
</body>
</html>