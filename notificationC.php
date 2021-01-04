<!DOCTYPE html>
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
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password=""; // Mysql password 
		$db_name="hsm"; // Database name 


		// Connect to server and select databse.
		$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 




    		$sql = "create table IF NOT EXISTS notifications(
    		Hname varchar(50),
    		name varchar(50),
    		address varchar(50),
			phone varchar(13) ,
			email varchar(50),
			type varchar(50),
			indate date,
			intime time,

    		);";  
		$result = mysqli_query($conn, $sql);
		
		$errorr=mysqli_error($conn);
		
		if ($errorr || $Nrow==0){
			echo $errorr;
			echo '<h1 style="color:red">Sorry error in server</h1><h2>Can\'t update this movement</h2>';
			
			//$conn.die();
			}
		else {
		we will update soon
			$Nrow=mysqli_num_rows($result);
			$row=mysqli_fetch_assoc($result);
				
		}
			mysqli_close($conn);
			  ?>	
