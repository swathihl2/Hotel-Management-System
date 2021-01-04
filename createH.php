<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management System</title>
</head>
	 <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./../css/Lcss.css">
<body background="#91FF33" bgcolor="#D8BFD8" style="text-decoration-color: white;color: black;text-align: center; text-align: justify-all; ">
<NOBR>
 <link rel="stylesheet" type="text/css" href="./css.css">
	<h1>Hotel Management System</h1><br>
<dir><h2><center>
	<table class="login">
		<thead><th><h4 style="color:skyblue;">Registration form for Hotel Managers</h4></th></thead>
		<td><center><form method="POST" action="LogupH.php">
		<label >Hotel Name</label> <input type="text" name="Hname"required><br>
		<label >Manager Name</label> <input type="text" name="name"required><br>
		<label>Address</label><input type="text" name="Address"required><br>
		<label>Phone</label><input type="number" name="Phone" size="10" required><br>
		<label>email</label><input type="email" name="email"><br>
		<label>GST No</label><input type="text" name="GST"required><br>
		<label>Password</label>       <input name="Password" type="password" onChange="onChange()" required/>      <br />
       <label>Confirm Password</label>      <input name="cpassword"  type="password" onChange="onChange()" /> </label>  <br />
		<input type="checkbox" name="toc" required><label style="font-size: 16px;"> &nbsp	Accept Terms and conditions</label><br>
		<button type="submit" name="submit" value="Login">Logup</button>	<br>
		<button onclick="window.location.href='./indexH.php'">Login</button>&nbsp
					<button onclick="window.location.href='./index.html'">Home</button>
	</center></form> </td></table></center>


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
<script type="text/javascript">
function onChange() {
  const password = document.querySelector('input[name=Password]');
  const confirm = document.querySelector('input[name=cpassword]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match');
  }
}

</script>
</html>