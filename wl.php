

<html>
<head>

</head>
<style>
#main{
 border: 10px solid red;
    margin: 60px;
    padding: 20px;
    background-color: blue;
    text-align: center;
}
#header{
border:0px solid;
width:100%;

}
#header ul{
	list-style-type:none;
}

#header ul li{
    border:0px solid;
	float:left;
	color=#ffffff;
	background-color:blue;
	width:240px;
	text-align:center;
	height:30px;
	line-height:30px;
}

#header ul li:hover{
background-color:black;
}



#header ul li a{
    text-decoration:none;
	color:#FFFFFF;
}
#main a{
color:black;
text-decoration:none;
}
</style>


<body bgcolor="white">
<div id="header">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="abt.html">About Us</a></li>
<li><a href="#">Facilities</a></li>
<li><a href="pa.php">Login</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

</div>
<br>
<h1><center> Online Hostel Allotement System</center></h1>
<h3><center> List of Registered Students</center></h3>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gupta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM  reg";
$result = $conn->query($sql);

 if(mysqli_num_rows($result) > 0)
	{
    // output data of each row
	echo("<table  width=100%  border=20 cellspacing=10 cellpadding=10>");
	echo("<tr><th>F_Name</th><th>M_Name</th><th>L_Name</th><th>Email</th><th>Pass</th><th>Room</th><th>Mob</th></tr>");
    while($row = mysqli_fetch_array($result)){
		
		 echo  " <tr><td>" . $row["fname"]."</td>";
         echo  " <td> " . $row["mname"]."</td>";
		  echo  " <td> " . $row["lname"]."</td>";
		   echo  " <td> " . $row["email"]."</td>";
		    echo  " <td> " . $row["pass"]."</td>";
			 echo  " <td> " . $row["room"]."</td>";
			  echo  " <td> " . $row["mob"]."</td>";
		 echo"</tr>";
	
    }
echo ("<table>");
}

 else {
    echo "0 results";
}

 
$conn->close();
?>
<br>

<center><h1>Allotement Process</h1></center><br>
<table border=1>
<form action="allot.php" method="POST">
<tr><th>F_Name</th><td><input type="text" name="t1"></td><th>E-mail</th><td><input type="text" name="t2"></td><th>Pass</th><td><input type="text" name="t3"></td></tr>
<tr><th>Mob</th><td><input type="text" name="t4"></td><th>Block</th><td><input type="text" name="t5"></td><th>Room</th><td><input type="text" name="t6"></td></tr><th>status</th><td><input type="text" name="t7"></td></tr>
<tr><th colspan="6"><input type="submit" value="submit"></th>
</tr>
</form>
</table>
