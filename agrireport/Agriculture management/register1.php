<!doctype html>
<html>
	<head>
	<title>register</title>
	
 <style>
  table{
  position:absloute;
  top:220px;
  left:590px;
  border:thin solid black;
  border-color:black;
  color:Black;
  cursor:pointer;
  background:rgba(255,255,255,0.2);
  }
 
   p{
  width:100%;
  text-algin:center;
 
  line-height:0.1em;
  margin:10px  0 20px;
  }
  p span{
  background:red;
  padding:0 10px;
  }
</style>
 </head>
	<body background="bin4.jpg"> 
	
	<center>
	<h1><i>RESGISTATION FORM</i></h1>
	<hr color="black"/>
	</center>
	
	<center>
	
	<form action="registerfail.php" method="POST">
	<table> 
	<td align="center"><h1><span style="color":black></span></h1>
	    <span style="color:"White"></span><i><h3> UserName:</i><input type="text" placeholder="Enter the Username" name="username" required ><br/><br>
		<span style="color:"white"> </span><i>Email:</i><input type="email" placeholder="Enter the Email" name="email" required width="30%"><br/><br/>
			<span style="color:"white"></span> <i>Password: </i><input type="password" placeholder="Enter the password" name="password" required  width="30%"><br/><br/>
			<span style="color:"white"></span><i>Phone Number:</i><input type="text" placeholder="Enter your phone number" name="phone" required  width="30%"><br/><br/>
			<span style="color:white"></span><i>Gender<br/><br><input type="radio" name="gender" id="rd"><span id="but">Male</span><input type="radio" name="gender" id="rd"><span id="but">Female</span><input type="radio" name="gender" id="rd"><span id="but">Other</span><br/><br>
            <select id="cat"><option>Student</option><option>Professional</option><option>Self Employed</option><option>others</option></select><br><br>
<button type="submit"><i>SUBMIT</i></button>  <br/><br/>
 <h3><i> click here to<a href="registerfail.php">LOGIN</a><i></h3>
			<button type="submit"><i>RESET</i></button><br/>
			
		</td>			
	</table>
	</form>
	
	</center>
	
	</body>
	</html>