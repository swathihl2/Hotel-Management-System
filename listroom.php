


<?php 
echo "<h1>Rooms</h1> ";
/*<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body>

</body>
</html>

<?php 

echo '<br>';
	include_once('connectsql.php');

    $GST=$_SESSION['GST'];
    $password=$_SESSION['password'];


    		$sql = "select * from rooms;";  
		$result = mysqli_query($conn, $sql);
		$Nrow=mysqli_num_rows($result);
		$errorr=mysqli_error($conn);
		
		if ($errorr || $Nrow==0){
			echo $errorr;
			echo '<h1 style="color:red">Rooms Not Added</h1><h2>Check by updating</h2>';
			
			//$conn.die();
			}
		else {
			$Nrow=mysqli_num_rows($result);
			$row=mysqli_fetch_assoc($result);
				echo '<div style="float:center;  font-family: \'Courier New\', monospace;"><h1>'.$row['Hname'].'</h1><h2>'.$row['GST'].'</h2></div>';
		}
			mysqli_close($conn);
			  ?>	


<!DOCTYPE html>
<html>
<head>
	<title>Bill Desk</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
session_start();
$name=$_SESSION['name'];
$phone=$_SESSION['phone'];
$type=$_POST['type'];
$date=$_POST['bookeddate'];

$ac=$_POST['ac'];
$_SESSION['bdate']=$date;
*/




//echo $name,$type,$date,$ac,' ',$phone;
include 'connectsql.php';
$hname=$_SESSION['hname'];

$sql = "select * from rooms where hname ='$hname' group by roomnumber;";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);

//echo mysqli_num_rows($result);
$Nrows=mysqli_num_rows($result);
if(!$Nrows)
{
 
  echo '<hr><h1 style="color : red">No Rooms still updated<h2 style="color : black">****</h2><hr><h3>'.$error.'<h3></h1>';
  //$conn.die();
}
//echo $Nrows;
//if(!$Nrows==1)
else
{
	$table='<center><table id="10"><tr><th>Room Number</th><th>status</th><th>occupier</th><th>COST</th><th>Date</th></tr>';

//$Nrows=mysqli_num_rows($result);

//echo $Nrows;
//if(!$Nrows==1)
	$i=0;

	while ($i!=$Nrows) {
  	$row=mysqli_fetch_assoc($result);
    $table.='<tr><td>'.$row['roomnumber'].'</td>';
    $table.='<td>'.$row['status'].'</td>';
    $table.='<td>'.$row['cname'].'</td>';
    $table.='<td>'.$row['cost'].'</td>';
    $table.='<td>'.$row['sdate'].'</td></tr>';
    $i=$i+1;  
	}

    $table .='</table></center>';
	echo $table;
}
 ?>
<br>
 

</button> </body>
<br><hr><br>


<style type="text/css">


body{
  background-color: #D8BFD8 ;}
 tr{

 		color: black;
 		background: black;
 		font-size: 18px;
 }
 td{
 		border : 2px solid;
 		color: black;
 		background: black;
 		font-size: 18px;
 	}
 	th
 {	border : 1px solid;
 		color: black;
 		background: black;
 		font-size: 25px;}
 	.inp{
 		height: 25px;
 		width: 300px;
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
	
table[id=10]{
border: 10px solid;
border-color: grey;
opacity: 70%;
background: black;
text-decoration-color: black;
color: black;
}

#date{
		width:200px;
 	margin-bottom:20px;
 }


 </style>
</html>