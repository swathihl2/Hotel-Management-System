 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css.css">
 </head>

<?php 
session_start();
include 'connectsql.php';

$roomnumber=$_POST['roomnumber'];
$type=$_POST['type'];
$ac=$_POST['ac'];
$cost=$_POST['cost'];
$hname=$_SESSION['hname'];
$mname=$_SESSION['mname'];
$status='not reserved';
$sdate='0-0-0';

$sql = "CREATE TABLE IF NOT EXISTS rooms(
	roomnumber int,
	type varchar(50),
	hname varchar(50),
	mname varchar(50),
	cost int,
	ac varchar(50),
	status varchar(50),
	sdate date,
	cname varchar(50),
	cphone varchar(15),
	payment varchar(15),
	paid int	
	);"; 

$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
if ($errorr){
	echo $errorr;
	$conn.die();
	}
echo $roomnumber;
$sql = "select * from rooms where roomnumber='$roomnumber' and hname='$hname;";  
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
$Nrows=mysqli_num_rows($result);
if($Nrows)
{
	echo '<h1>Room is already Exist</h1><br>';
	echo $errorr;
	//echo '<button><a href="loginH.php">Back</a></button>';

}
else{

$sql = "insert into rooms(roomnumber,type,hname,mname,cost,ac,status) values('$roomnumber','$type','$hname','$mname','$cost','$ac','$status');";  
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);

if ($errorr)
	 {
	 	
			echo '<h1>Sorry Can\'t register at this movement Check for error below</h1><br>';
			echo $errorr;
	}
		


		//$conn.die();
	
else{
	//$Nrows=mysqli_num_rows($result);
	//echo $Nrows;
	//$errorr=mysqli_error($conn);
	//echo $errorr;
	echo '<h1 style="color :green;">'.$roomnumber.' Room Added</h1>';
	//$result=mysqli_fetch_assoc($result);
	}

}
 ?>
 <body>
 	<button><a style="color: white" href="loginH.php">Back</a></button>
 
 </body>
 </html>