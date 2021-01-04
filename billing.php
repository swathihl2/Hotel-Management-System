<!DOCTYPE html>
<html>
<head>
	<title>Bill Desk</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>



<?php 


//echo "<h1>Confirmation</h1> ";
session_start();

$name=$_SESSION['name'];
$phone=$_SESSION['phone'];
$date=$_SESSION['bdate'];

$hname=$_POST['hname'];
$_SESSION['bookedhotel']=$hname;
$rnumber=$_POST['rnumber'];
$_SESSION['bookedroom']=$rnumber;
//echo $name,$type,$date,$ac,' ',$phone;
include 'connectsql.php';

$sql = "select * 
		from rooms 
		where hname='$hname' and roomnumber='$rnumber' and status='Not reserved';";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);

if($error)
{
	echo $error;
}

$Nrows=mysqli_num_rows($result);

if(!$Nrows)
{
 
  echo '<hr><h1 style="color : red">NO Hotels For Selected Types <h2 style="color : black">Go with other Types</h2><hr><h3>'.$error.'<h3></h1><button ><a href="chechform.php"> back</a></button>';
  $conn.die();
}
//echo $Nrows;
//if(!$Nrows==1)
else
{


$table='<center><table style="border : 2px solid;"><tr style="border : 2px solid;"><th style="border : 2px solid;"> Hotel Name </th><th>Room number</th><th> Rooms type</th><th>AC</th><th>Cost</th></tr>';


  $row=mysqli_fetch_assoc($result);
  /*  $table.='<tr><td>'.$row['hname'].'</td>';
    $table.='<td>'.$row['roomnumber'].'</td>';
    $table.='<td>'.$row['type'].'</td>';
     $table.='<td>'.$row['ac'].'</td>';
    $table.='<td>'.$row['cost'].'</td></tr>';

    $table .='</table></center>';
	echo $table;*/
}
 ?>
<br>


<center>
	<table>
		<thead><h1>Billing</h1></thead>
		<tr><td><label>Name </label></td><td><label><?php echo $name; ?></label></td></tr>
		<tr><td><label>Phone </label></td><td><label><?php echo $phone; ?></label></td></tr>
		<tr><td><label>Date </label></td><td><label><?php echo $date; ?></label></td></tr>
		<tr><td><label>Hotel Name </label></td><td><label><?php echo $hname; ?></label></td></tr>
		<tr><td><label>Room Number </label></td><td><label><?php echo $rnumber; ?></label></td></tr>
		<tr><td><label>COST </label></td><td><label><?php echo $row['cost']; ?>Rs</label></td></tr>
		<tr><td><label hidden>Payment Method</label></td><td>
			<form method="POST" action="booked.php"  hidden required>
				  <input type="radio" type="submit" hidden name="mood"  value="offline">Offline <br>
         		  <input type="radio" type="submit" hidden name="mood" value="online">Online

			<br>
			
		</td></tr>
	</table>
	<input class="pbtn" type="submit" name="submit" value="Continue">
	 <button ><a href="loginCC.php"> back</a></button>
			</form>
</center>


 </body>
<br><hr><br>




<?php 
	
	$_SESSION['cost']=$row['cost'];

	$sql = "update rooms 
		set cname='$name' 
		where hname='$hname' and roomnumber='$rnumber';";  
	$result = mysqli_query($conn, $sql);
	$error=mysqli_error($conn);
	//echo mysqli_num_rows($result);
	if ($error) {
		echo $error;
		echo '<h1 style="color:red;"> Failed</h1>';
		# code...
	}
	 ?>


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
