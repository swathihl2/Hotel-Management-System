<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<?php 

echo '<br>';
		include 'connectsql.php';
$hname=$_SESSION['hname'];
    	$sql = "select * from rooms where hname='$hname'and status='reserved';";  
		$result = mysqli_query($conn, $sql);
		$errorr=mysqli_error($conn);
		$Nrows=mysqli_num_rows($result);
		
		if ($errorr || $Nrows==0){
			echo $errorr;
			echo '<h1 style="color:red">No rooms are Occupied</h1><h2>wait for new Customers</h2>';
			
			//$conn.die();
			}
		else {
		
			
$table='<center><table class="listed" style="border : 2px solid;"><tr><th>client Name</th><th>Room number</th><th>Phone</th><th>In Date</th><th>Status</th></tr>';
//echo date("Y-m-d");
$i=0;
echo $Nrows;
while ($i!=$Nrows) 
	{
  	$row=mysqli_fetch_assoc($result);
    $table.='<tr><td>'.$row['cname'].'</td>';
    $table.='<td>'.$row['roomnumber'].'</td>';
    $table.='<td>'.$row['cphone'].'</td>';
    $table.='<td>'.$row['sdate'].'</td>';
    $table.='<td>'.$row['status'].'</td></tr>';
    $i=$i+1;
	}
	//}

    $table .='</table></center>';
	echo $table;

		}
			mysqli_close($conn);
			  ?>	







<br>
<br>
<hr>
<hr>
<center>
	<table>
		<td>
		<form action="clearroomdata.php" method="POST">
			<label >Room Number</label><input style="width: 250px;height: 20px;" placeholder="Enter room Number to clear " type="number" name="roomnumber"><br>
			<center><input type="submit" name="submit" value="clear"></form></center>
		</form></td>	
	</table>
</center>



</body>