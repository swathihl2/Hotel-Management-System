<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management System</title>
</head>
	 <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./../css/Lcss.css">
<body background="#91FF33" bgcolor="#D8BFD8" style="text-decoration-color: white;color:black;text-align: center; text-align: justify-all; ">
<NOBR>
 <link rel="stylesheet" type="text/css" href="./css.css">
	<h1>Hotel Management System</h1><br>

<div>
	<h2>
		<center>
	<table class="login">
		<thead><th><h4 style="color:skyblue;">Login</h4></th></thead>
		<td>
			<center>
				<form method="POST" action="loginC.php">
					<label >User Name</label> <input type="text" name="name"required><br>
					<label >Phone</label> <input type="number" name="phone" minlength="10" maxlength="10"   required><br>
					<label>Password</label><input type="Password" name="Password"required><br>
					<button type="submit" name="submit" value="Login">Login</button><br>

					<button onclick="window.location.href='createC.php'" style="vertical-align:  right;">Logup</button>&nbsp
					<button onclick="window.location.href='./index.php'">Home</button>
	
				</form> 
			</center>
		</td>
	</table>
		</center>


</dir></h2>


</body>
<style type="text/css">
 label{
 	color: white;

 	display:inline-block;width:200px;margin-bottom:20px;
 }
body{
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

table{
border: 10px solid;
opacity: 70%;
background: black;
text-decoration-color: black;
color: black;
}
</style>

</html>
