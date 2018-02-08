<?php
$user="root";
$pass="";
$db="gupta";
$h="localhost";
$dbha=mysqli_connect($h,$user,$pass,$db) or die(" unable to connect");
echo "connected";
$fname=$_POST["n1"];
$mname=$_POST["n2"];
$lname=$_POST["n3"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$room=$_POST["r1"];
$mob=$_POST["mob"];
echo"hello";
$query="insert into reg values('$fname','$mname','$lname','$email','$pass','$room',$mob)";
$exec=mysqli_query($dbha,$query);
if(!$exec)
	die(" not inserted");
echo "your data successfully registered";
mysqli_close($dbha);










?>


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
<li><a href="cont.html">Contact  Us</a></li>
</ul>

</div>
<br>
<h1><center> Online Hostel Allotement System</center></h1>
<h3><center>  you are successfully registered , please login by using email and password to see the room type and availability</center></h3>