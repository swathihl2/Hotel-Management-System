<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body>
	<br><br><br><br>
<div>
	<center>
		<table >
			<td>
			<form method="POST"  action="BillDesk.php" >

			<label >Tyep</label>       
			        <select id="type" name="type" required>
			          
			          <option value="Single">single</option>
			          <option value="double">double</option>
			          <option value="family">family</option>
			       </select>        <br/>
			<label >AC</label>       
			       <select id="type" name="ac" >
			          <option value="non AC">Non AC</option>
			          <option value="ac">AC</option>
			         
			       </select>        <br/>

			<label  >Date</label>
			<input calss="date" type="Date" required name="bookeddate"><br>
			<input type="submit" name="submit_type" value="Check">
			</form>
		</td>
	</table>
</center>
</div>
</body>
<?php 

 if(array_key_exists('submit_type', $_POST)) { 
            showfeched(); 
        } 
        
 ?>


<style type="text/css">


body{
  background-color: #D8BFD8 ;}

button{

  background-color: #4CAF50;
  color: white;
 
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
label{
	color: black;
	font-size: 20px;
}




 </style>


</html>