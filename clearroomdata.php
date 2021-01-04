<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>

<?php 

echo '<br>';
		include 'connectsql.php';

		session_start();
		$hname=$_SESSION['hname'];
		$roomnumber=$_POST['roomnumber'];

		$cdate=date('Y-m-d');

		$sql = "create table IF NOT EXISTS ledger(
				cname varchar(50),
				cphone varchar(15),
				stayedrnumber int,
				stayedhotel varchar(50),
				address varchar(100),
				email varchar(50),
				indate date,
				outdate date,
				payment	varchar(15),
				paid int );"; 

				$result = mysqli_query($conn, $sql);
		$errorr=mysqli_error($conn);
				if ($errorr )
		{
			echo $errorr;
			echo '<h1 style="color:red">Unable to create data</h1><h2></h2>';
			$conn.die();
		} 

    	$sql = "INSERT INTO ledger(cname,cphone,stayedrnumber,stayedhotel,indate,payment,paid)
				SELECT 
				   cname,cphone,roomnumber,hname,sdate,payment,paid
				FROM 
				   rooms
				WHERE
				   roomnumber='$roomnumber' and hname='$hname' and cname IS NOT NULL;";  
		$result = mysqli_query($conn, $sql);
		$errorr=mysqli_error($conn);
		//$Nrows=mysqli_num_rows($result);
				if ($errorr )
		{
			echo $errorr;
			echo '<h1 style="color:red">Unable to retrive data at 1</h1><h2></h2>';
			$conn.die();
		}
    	$sql = "UPDATE ledger
    			set outdate='$cdate'
				WHERE stayedrnumber='$roomnumber' and stayedhotel='$hname' and cname IS NOT NULL;;";
				$result = mysqli_query($conn, $sql);
		$errorr=mysqli_error($conn);
		if ($errorr )
		{
			echo $errorr;
			echo '<h1 style="color:red">Unable to retrive data at 2</h1><h2></h2>';
			$conn.die();
		}
		//echo date("Y-m-d");
    	$sql = "update rooms
    			set cname=NULL,cphone=NULL,status='not reserved',sdate=NULL,paid=NULL,payment=NULL 
    			where roomnumber='$roomnumber';";  
		$result = mysqli_query($conn, $sql);
		$errorr=mysqli_error($conn);
		//$Nrows=mysqli_num_rows($result);
		
		if ($errorr ){
			echo $errorr;
			echo '<h1 style="color:red">Not deleted</h1><h2></h2>';
			
			//$conn.die();
			}
		else {

			
		
		/*
			
$table='<center><table class="listed" style="border : 2px solid;"><tr style="border : 2px solid;"><th>client Name</th><th>Room number</th><th>Phone</th><th>In Date</th><th>Status</th></tr>';

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

		*/
echo '<h1 style="color:green">deleted</h1>';}
			mysqli_close($conn);
			  ?>	

<button><a href="loginH.php">Back</a></button>

</body>