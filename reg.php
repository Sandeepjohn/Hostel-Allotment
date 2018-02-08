<html>
<head>
<script>

function validate()
{
  var email = document.getElementById("email").value;
 
   if(email.length>50)
        {
           alert("Invalid Email");
        }
           if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
               {
           
                }
		            else
                    alert(" Invalid Email");
  
  
  var e1= document.getElementById("p1").value;
  var e2 = document.getElementById("p2").value;
  
  
  if(e1.length>=8)
  {
    if(e1==e2)
                {    }
          else 
         alert("Confirmation password doesn't match");

  
  
  
  var mob=document.getElementById("m1").value;
  var phoneno = /^\d{10}$/;
      
        if(mob.length!=10){
             alert("Invalid Contact Number");
        }
        if ((mob.match(phoneno)))
        {
            
        }
        else
        {
             alert("Confirmation password doesn't match");
        }
		
		
		}
		else 
		alert(" Password must be grater than 8");
		
		
		

		
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
<li><a href="login.php">Login</a></li>
<li><a href="cont.html">Contact  Us</a></li>
</ul>

</div>
<br>
<h1><center>Registration Form</center></h1>
<center>
<table border="30" cellspacing="10"  cellpadding="10">
<form action="insert.php" method="post">
<tr><th>First Name</th><td> <input type="text" name="n1" required maxlength="30"></td></tr>
<tr><th>Middle Name</th><td> <input type="text" name="n2"  maxlength="30"></td></tr>
<tr><th>Last Name</th><td> <input type="text" name="n3" required  maxlength="30"></td></tr>
<tr><th>E-mail</th><td> <input type="text" name="email" required  maxlength="30"></td></tr>
<tr><th>Pass</th><td> <input type="password" name="pass" required  maxlength="30"></td></tr>
<tr><th>Confirm-Pass</th><td> <input type="password" id="p2"  required maxlength="30"></td></tr>
<tr><th>Type of Room</th><td><select name="r1" required>
<option>select</option>
  <option >1 Bed AC</option>
  <option>1 Bed Non-AC</option>
  <option >2 Bed AC</option>
  <option >2 Bed Non-AC</option></td></tr>
</select>
<tr><th>Mobile</th><td> <input type="text" name="mob" required maxlength="12"></td></tr>
<tr><td colspan="2"> <input type="submit" value="submit" onclick="validate()"></td></tr>
 
</from>
</table>
</center>