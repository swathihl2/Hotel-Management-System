<!DOCTYPE html>
<html>
<head>
	<title>Bill Desk</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<br>


</button> 

<style type="text/css">


body{
  background-color: #D8BFD8 ;}
 tr{

 		color: black;
 		background: white;
 		font-size: 18px;
 }
 td{
 		border : 2px solid;
 		color: black;
 		background: white;
 		font-size: 18px;
 	}
 	th
 {	border : 1px solid;
 		color: black;
 		background: white;
 		font-size: 25px;}
 	input{
 		height: 25px;
 		width: 300px;
 	}
 	
 	label{
 		font-size: 25px;
 		color: black;
 	}
button{

  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
	a{
    font-size: 15px;
    resize: 15px;
     	color : white;	
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
#date{
		width:200px;
 	margin-bottom:20px;
 }


 </style>
</html>


<?php 
echo "<h1>Confirmation</h1> ";

session_start();

$name=$_SESSION['name'];
$phone=$_SESSION['phone'];
$type=$_POST['type'];
$date=$_POST['bookeddate'];

$ac=$_POST['ac'];
$_SESSION['bdate']=$date;

//echo $name,$type,$date,$ac,' ',$phone;
include 'connectsql.php';


$sql = "select * 
		from rooms 
		where (type='$type' or ac='$ac') and (status='not reserved' or status=NULL);";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);
?>



<?php
//echo mysqli_num_rows($result);
$Nrows=mysqli_num_rows($result);
if($error || !$Nrows)
{
 
  echo '<hr><h1 style="color : red">NO Hotels For Selected Types <h2 style="color : black">Go with other Types</h2><hr><h3>'.$error.'<h3></h1> <button><a href="loginCC.php"> back</a>';
  $conn.die();

}
//echo $Nrows;
//if(!$Nrows==1)
else
{
$table='<center><table style="border : 2px solid;"><tr style="border : 2px solid;"><th style="border : 2px solid;"> Hotel Name </th><th>Room number</th><th> Rooms type</th><th>AC</th><th>Cost</th></tr>';

$i=0;
//echo $Nrows;
while ($i!=$Nrows) 
	{
  	$row=mysqli_fetch_assoc($result);
    $table.='<tr><td>'.$row['hname'].'</td>';
    $table.='<td>'.$row['roomnumber'].'</td>';
    $table.='<td>'.$row['type'].'</td>';
    $table.='<td>'.$row['ac'].'</td>';
    $table.='<td>'.$row['cost'].'</td></tr>';
    $i=$i+1;
	}
}

    $table .='</table></center>';
	echo $table;
 ?>

 <br><hr><br>
<center>
	<table>
			<tr><th>Please Enter For Confirmation as shown</th></tr><br>
			<tr><td>
			<form method="POST" action="billing.php"><br>
				<label>Hotel Name</label><input required type="text" placeholder="Enter Hotel Name" name="hname"><br>
				<label >Room No</label><input required type="number" name="rnumber" placeholder="Enter Room No"><br>
				<center><input style="background-color: green;" class="button" type="submit" name="calc" value="Book"></center><br>
			</form></td></tr>


	</table>
	<button style="background-color: red"><a href="loginCC.php"> back</a>
</center>
</body>


