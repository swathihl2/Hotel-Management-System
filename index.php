
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management System</title>
</head>
	 <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./../css/Lcss.css">

<body background="#91FF33" bgcolor="#D8BFD8" style="text-decoration-color: white;color:black;text-align: center; text-align: justify-all; ">

 <link rel="stylesheet" type="text/css" href="./css.css">
	<h1>Hotel Management System</h1><br>

<div>
	<h2>
		<center>
	<table class="login">
		<td>
			<center>
			
					<button onclick="window.location.href='indexC.php'" style="vertical-align:  right;">Book Hotel</button>&nbsp
					<button onclick="window.location.href='indexH.php'" style="vertical-align:  right;">Hotel Administrator</button>
	
				
			</center>
		</td>
	</table>
		</center>


</dir></h2>


</body>
<style type="text/css">
 label{
 	color: white;

 	display:inline-block;width:200px;margin-bottom:20px;
 }
body{
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

table{
border: 10px solid;
opacity: 70%;
background: black;
text-decoration-color: black;
color: black;
}
footer {
  height: 2px;

  background-color: green; 
}



</style>
<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS hsm";
if ($conn->query($sql) === TRUE) {
  echo '<hr style="  border: 1px solid green;width: 20%;">';
} else {
  echo '<hr style="  border: 1px solid red;width: 20%;">' . $conn->error;
}

$conn->close(); ?>


</html>