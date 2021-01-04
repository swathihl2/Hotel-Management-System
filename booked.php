<!DOCTYPE html>
<html>
<head>
	<title>Bill Desk</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>



<?php 


//echo "<h1>Confirmation</h1> ";


//$mood=$_POST['mood'];
$mood='offline';
if($mood=='offline'){
	book();
}
else if($mood=='online')
	{
		$flag=0;
	//include 'netbanking.php';

	if($flag==1)
	{
		book();
	}

	}

function book()
{
	session_start();

$name=$_SESSION['name'];
$phone=$_SESSION['phone'];
$date=$_SESSION['bdate'];
$hname=$_SESSION['bookedhotel'];
$rnumber=$_SESSION['bookedroom'];
$cost=$_SESSION['cost'];
$mood=$_POST['mood'];
include 'connectsql.php';

//echo $name,$date,$rnumber,$hname;
$sql = "update rooms
		set cname='$name',sdate='$date',status='reserved',cphone='$phone',payment='$mood',paid='$cost'
		where hname='$hname' and roomnumber='$rnumber';";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);

if($error)
{
	echo $error;
}
else
{
	echo '<h1 style="color:green;">Hotel '.$hname.' of room number '.$rnumber.' booked Successfully...</h1><br><h2>Thank you '.$name.'<br>';
}
}

	 ?>
 <button ><a href="loginCC.php"> back</a></button>


 </body>
<br><hr><br>

<style type="text/css">
a{
    font-size: 15px;
    resize: 15px;
    
    text-decoration: none; 
}
a:link{
    color : white ;
    text-decoration: none:; 
}
a:visited{
    color: white;
}
 a:hover{
  color: white;
}
 a:active{
    color : white;
}
thead{
	font-size: 20px;
}
body{
  background-color: #D8BFD8 ;
}
 tr{

 		color: black;
 		background: white;
 		font-size: 18px;
 }
 td{
 		color: black;
 		background: white;
 		font-size: 18px;
 	}
 	th{	
 		 		color: black;
 		background: white;
 		font-size: 25px;
 	}
 
 	a{
 	color : white;	
 	}
 	label{
 		font-size: 25px;
 		color: black;
 	}

select{
		width:150px;
 	margin-bottom:20px;

}
	table{
		 		border : 2px solid;
		 		background: black;
		 		opacity: 70%;
	}
#date{
		width:200px;
 	margin-bottom:20px;
 }
 input[type=submit],button{

  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.pbtn{
 border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: green;
  text-align: center;
  cursor: pointer;
 
  font-size: 18px;

}
 </style>

</html>
