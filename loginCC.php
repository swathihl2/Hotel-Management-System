
<!DOCTYPE html>
<html>
	<head>
		<title>Hotel Management System</title>
	</head>
	 <link rel="stylesheet" type="text/css" href="./css.css">

<body background="#91FF33" bgcolor="#D8BFD8" style="text-decoration-color: white;color: black;text-align: center; text-align: justify-all; ">


<?php

session_start();
include 'connectsql.php';



$name=$_SESSION['name'];
$phone=$_SESSION['phone'];



echo '<div style="float:left;  font-family: \'Courier New\', monospace;"><h1>'.$name.'</h1><h2>'.$phone.'</h2></div>';


$sql = "";  
/*$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$errorr=mysqli_error($conn);

if ($errorr || $Nrow==0)
	{
	echo $errorr;
	echo '<h1 style="color:red">User Not found</h1><br><h2>Check for Other way</h2>
	<button onclick="window.location.href=\'createC.php\'">Logup</button>
	<button onclick="window.location.href=\'indexC.php\'">Back</button>';
	$conn.die();
	}
else {
	$rows=mysqli_fetch_assoc($result);
	$passF=$rows['password'];
	/*if($password==$passF){
		echo '<div style="float:left;  font-family: \'Courier New\', monospace;"><h1>'.$rows['name'].'</h1><h2>'.$rows['phone'].'</h2></div>';
	//}
	//else{
		

*/
	
?>


	<h1>Hotel Management System</h1><br>


<button  onclick="window.location.href='./indexC.php'" style="float: right;" >Logout / Home</button>
</div><br>

<br>
<br><hr>
<hr>
<form method="POST">
<button type="submit"  name="check" style="float: left;" >Check</button>
</form>



</body>
<?php 

 if(array_key_exists('submit', $_POST)) { 
            button1(); 
        } 
else if (array_key_exists('check', $_POST)) { 
            button2(); 
        } 



          function button1() { 
             echo '<br>'."Room Details"; 
             include('rrooms.php');
        } 
          function button2() { 
          	
             include 'chechform.php'; 
             
        } 
          function showfeched() { 
             echo "Showing ";
             if(isset($_POST['type'])!='NULL' )
             {
             	$type=$_POST['type'];
             	echo $type;
             }
        } 


 ?>
<style type="text/css">
 label{
  	display:inline-block;
 	width:150px;
 	margin-bottom:20px;
 }

select{
		width:150px;
 	margin-bottom:20px;

}
#date{
		width:200px;
 	margin-bottom:20px;
}
table.list{
border: 1px solid;
font-size: 20px bold;
width: 40%;

color: black;
}
td{
	color: black;
width: 20%;
}




</style>

</html>