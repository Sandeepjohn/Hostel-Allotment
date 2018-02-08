<?php
$f=$_POST["t1"];
$m=$_POST["t2"];
$l=$_POST["t3"];
$mo=$_POST["t4"];
$bl=$_POST["t5"];
$ro=$_POST["t6"];
$st=$_POST["t7"];
$user="root";
$pass="";
$db="gupta";
$h="localhost";
$dbha=mysqli_connect($h,$user,$pass,$db) or die(" unable to connect");

$query="insert into allot values('$f','$m','$l',$mo,'$bl','$ro','$st')";
$exec=mysqli_query($dbha,$query);
if(!$exec)
	die(" not inserted");
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
<h3><center> Successfuly Romm Alloted</center></h3>







