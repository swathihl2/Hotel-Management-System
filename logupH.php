
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
$Hname=$_POST['Hname'];
$GST=$_POST['GST'];

$sql = "CREATE TABLE IF NOT EXISTS manager(
	name varchar(50) ,
	GST varchar(50),
	address varchar(50),
	phone varchar(13) ,
	email varchar(50),
	password varchar(50),
	Hname varchar(70),
	primary key(GST,name,phone)
	);";  
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
if ($errorr){
	echo $errorr;
	$conn.die();
	}

$sql = "insert into manager values('$user','$GST','$address','$phone','$email','$password','$Hname');";  
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
	 	$sql = "select * from manager where (name='$user' or phone='$phone') or (GST='$GST' and Hname='$Hname'); ";  
		$result = mysqli_query($conn, $sql);
		if(mysqli_error($conn))
		{
			echo '<h1>Sorry Can\'t register at this movement Check for error below</h1><br>';
			echo $errorr;
		}
		else {
			echo '<h1 style="color:red">User '.$user.' Already Registered</h1>
			<button onclick="window.location.href=\'createC.php\'">Back</button>
			<button onclick="window.location.href=\'indexC.php\'">Login</button>';
		}
		

		$conn.die();
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

</h1>
</body>
</html>