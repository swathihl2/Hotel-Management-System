
<!DOCTYPE html>
<html>
<head>
	<title>redirect</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%"></div>
<body>


<div class="container">

 <h2>Loading...</h2>
                                        
  <div class="spinner-border"></div>
</body>

<style type="text/css">
 label{
  	display:inline-block;
 	width:150px;
 	margin-bottom:20px;
 }

select{
		width:150px;
 	margin-bottom:20px;

}
#date{
		width:200px;
 	margin-bottom:20px;
}
table.list{
border: 1px solid;
font-size: 20px bold;
width: 40%;

color: black;
}
td{
	color: black;
width: 20%;
}




</style>

</html>
<?php
session_start();
include 'connectsql.php';

$name=$_POST['name'];
$phone=$_POST['phone'];
$password=$_POST['Password'];
$_SESSION['phone']=$phone;
$_SESSION['name']=$name;

$sql = "select * 
		from client
		where phone='$phone' and name='$name';";  
$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$errorr=mysqli_error($conn);
if ($errorr || $Nrow==0){
	if ($errorr) {
		# code...
		echo $errorr;
	}
	
	echo '<h1 style="color:red">User Not found</h1><br><h2>Check for Other way</h2>
	<button onclick="window.location.href=\'createC.php\'">Logup</button>
	<button onclick="window.location.href=\'indexC.php\'">Back</button>';
	die();
		}
else {
	$rows=mysqli_fetch_assoc($result);
	$passF=$rows['password'];
	if($password==$passF){
		echo '<div style="float:left;  font-family: \'Courier New\', monospace;"><h1>'.$rows['name'].'</h1><h2>'.$rows['phone'].'</h2></div>';

	}
	else{
		echo '<h1 style="color:red">Invalid password</h1>';
		
	}
	}
?>


<?php



header('location:loginCC.php');	# code...


	
?>