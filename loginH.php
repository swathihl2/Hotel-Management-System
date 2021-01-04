<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management System</title>
</head>
	 <link rel="stylesheet" type="text/css" href="./css.css">

<body background="#91FF33" bgcolor="#D8BFD8" style="text-decoration-color: white;color: black;text-align: center; text-align: justify-all; ">


		<?php
		session_start();



		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password=""; // Mysql password 
		$db_name="hsm"; // Database name 


		// Connect to server and select databse.
		$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 


    $GST=$_SESSION['GST'];
    $password=$_SESSION['password'];


    		$sql = "select * 
				from manager
				where GST='$GST' limit 1;";  
		$result = mysqli_query($conn, $sql);
		$Nrow=mysqli_num_rows($result);
		$errorr=mysqli_error($conn);
		
		if ($errorr || $Nrow==0){
			echo $errorr;
			echo '<h1 style="color:red">Hotel Detials Not found</h1><br><h2>Check for correct GST No and Password</h2>
			<button onclick="window.location.href=\'createC.php\'">Logup</button>
			<button onclick="window.location.href=\'indexC.php\'">Back</button>';
			$conn.die();
			}
		else {
			$row=mysqli_fetch_assoc($result);
      $_SESSION['hname']=$row['Hname'];
      
      $_SESSION['mname']=$row['name'];
				echo '<div style="float:center;  font-family: \'Courier New\', monospace;"><h1>'.$row['Hname'].'</h1><h2>'.$row['GST'].'</h2></div>';
		}
	
			
			  ?>	


	<br>

<div>
	
	   	<button  onclick="window.location.href='indexH.php'" style="float: right;" >Logout</button>
<br><hr><hr>

    
  <div>
    <form method="post"> 
  
        <input class="txtbtn" type="submit" name="SRD" style="float: left;"
                class="txtbtn" value="Rooms Status" /> 
          
        <input type="submit" name="RS" style="float: left;"
                class="txtbtn" value="Update ledger" /> 
        <input type="submit" name="addroom" style="float: left;"
                class="txtbtn" value="Add Room"/> 
        <input type="submit" name="clearing" style="float: left;"
                class="txtbtn" value="clear room status" /> 
        <input type="submit" class="txtbtn" name="showledger" style="float: left;" value="show ledger">
    

	 

    </form>
   
 
</div>


 <?php
        if(array_key_exists('SRD', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('RS', $_POST)) { 
            button2(); 
        } 
        else if(array_key_exists('search', $_POST)) { 
            button3(); 
        } 
        else if (array_key_exists('addroom', $_POST)) { 
            button4(); 
        	# code...
        }
        else if (array_key_exists('clearing', $_POST)) { 
            button5(); 
        	# code...
        }
         else if (array_key_exists('showledger', $_POST)) { 
            button6(); 
          # code...
        }

   
        function button1() { 
             echo '<br>'." "; 
             include('listroom.php');
        } 
        function button2() { 
        	echo '<br>'."<h1>Room status Updation</h1>";
             include('update.php');

        } 
       function button3() { 
            echo '<br>'."<h1>Searching for Room</h1> ";
           include('search.php');
        }
               function button4() { 
            echo '<br>'."<h1>Add Room</h1>  ";
           include('addroom.php');
        }
               function button5() { 
            echo '<br>'."<h1>Clearing</h1>  ";
           include('clearing.php');
        }
      function button6(){
       echo '<br>'.'<h1>Ledger</h1>';
    

                      	include ('ledgershow.php');
                      }
    ?> 




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
border-color: grey;
opacity: 70%;
background: black;
text-decoration-color: black;
color: black;
}
td,th{
  border: 2px solid;
  border-color: grey;
  color: white;
}
.txtbtn{
	  cursor: pointer;
  font-size: 18px;
   display: inline-block;
   color: black;
   background: skyblue;
    text-align: center;
  cursor: pointer;
 
  font-size: 18px;
}
.txtbtn:hover{
	opacity: 0.7;
}
button {
 
  cursor: pointer;
  font-size: 18px;
}
button:hover, a:hover {
  opacity: 0.7;
}




</style>

</html>