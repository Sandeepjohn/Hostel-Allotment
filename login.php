<html>
<head>
<script>
function validate()
{
  var email = document.getElementById("email").value;
   if(email.length==0)
   alert("Please Enter Your Email");
     else{
   if(email.length>50)
        {
           alert("Invalid Email");
        }
           if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
               {
           
                }
		            else
                    alert(" Invalid Email");
    
  }
  }
  
</script>
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


<div id="main">
	<h2>Student Login </h2>
<form action="sl.php" method="post">
	Email: <input type="text" id="email" name="t1" required><br /><br />
	Password: <input type="password" name="t2" required><br /><br />
         <input type="submit" value="submit" onclick="validate()">


</form>
<h4>if you are New User <h4>
<a href = "reg.php" >Register for new Use </a>
	</div>
</body>
</html>