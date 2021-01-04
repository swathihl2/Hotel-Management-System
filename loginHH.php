<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management System</title>
</head>
	 <link rel="stylesheet" type="text/css" href="./css.css">

<body background="#91FF33" bgcolor="#D8BFD8" style="text-decoration-color: white;color: black;text-align: center; text-align: justify-all; ">
<?php

		session_start();

		$GST=$_POST['GST'];
		$password=$_POST['Password'];

		$_SESSION['GST']=$GST;
		$_SESSION['password']=$password;
		
		header('location:loginH.php');
		
     
	  ?>	

</div>


	


</html>