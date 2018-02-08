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
<h3><center> Welcome</center></h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gupta";
$email=$_POST["t1"];
$pass=$_POST["t2"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$t=1;
$sql = "SELECT * FROM allot  "  ;
$result = $conn->query($sql);

 if(mysqli_num_rows($result) > 0)
	{
		
    // output data of each row
	echo("<table  width=100%  border=20 cellspacing=10 cellpadding=10>");
	echo("<tr><th>Name</th><th>Email</th><th>Mob</th><th>Block</th><th>Room</th><th>Status</th></tr>");
    while($row = mysqli_fetch_array($result)){
		
		if( $row["lname"]==$pass  || $row["mname"]==$email)
		{
			$t=0;
			session_start();
			$_SESSION["pass"] = $row["lname"];
		 echo  " <tr><td>" . $row["fname"]."</td>";
		  echo  " <td>" . $row["mname"]."</td>";
		   echo  " <td>" . $row["mob"]."</td>";
		    echo  " <td>" . $row["block"]."</td>";
			 echo  " <td>" . $row["room"]."</td>";
			  echo  " <td>" . $row["status"]."</td>";
      
		 echo"</tr>";

		}
		
    }
	if($t==1)
		echo "<h1>Invalid email or password</h1>";
echo ("<table>");
}

 else {
    echo "0 results";
}

 
$conn->close();

?>






