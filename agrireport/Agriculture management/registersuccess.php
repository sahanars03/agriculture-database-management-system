<!DOCTYPE html>
<html>
     <head>
        <title>simple Registration form</title>	
        <style>
		body{
	background-image:url(bin4.jpg);
	background-repeat:no-repeat;
	background-size:100% 700px;
}

	
	
form{
	margin-bottom:0 auto;
	width:300px;
	text-align:center;
	margin:100px 400px;
}
input{
    margin-bottom:0px;
	padding:10px;
	width:150px;
	border:1px solid #ccc;
}
#registration{
    width:100%;
	background-color:#051019;
	opacity:0.8;
	padding:50px 0px;
	
}
label{
     cursor:pointer;
}
#form-switch{
         display:none;
}
#registration{
           display:none;
}
#form-switch:checked~#registration{
           display:block;
            text-align:center;
             margin:50px 450px;
             width:350px;			 
}
#form-switch:checked~#login{
	display:none;
}
#button{
	width:250px;
	padding:10px;
	border-radius:5px;
	outline:0px;
}
#cat{
	outline:0px;
    width:150px;
	padding:10px;
	border-radius:5px;
}

#but{
    color:white;
	font-size:18px;
}
#butt{
     width:150px;
	 padding:10px;
	 border-radius:5px;
	 outline:0px;
	 background-color:#0c6996;;
	 border:2px solid #01010c;
	 color:aliceblue;
	 font-size:18px;
}
#lab{
	color:white;
	font-size:14px;
}
</style>
		
	 </head>
	 <body>
	    
		    <input type="checkbox" id="form-switch">
			
			<form id="login" action="agri.php" method='post'>
			 <input type="text" name="user_name" id="button" placeholder="Enter your user name"><br>
			 <br>
			 <input type="password" name="password" id="button" placeholder="Enter your password"><br>
			 <br>
			 <input type="submit" value="Login" id="butt">
			 <label for="form-switch"><span>Register</span></label>
				 </form>
	
		    
			 <form id="registration" action="adminview.php" method='post'>
			 <h2 aligh="center" style="color:green"> Registration Success </h2>
		     <input type="text" name="user_name" id="button" placeholder="Enter your User name"><br>
			 <br>
			  <input type="text" name="email" id="button" placeholder="Enter your Email"><br>
			 <br>
			  <input type="password" name="password" id="button" placeholder="Enter your Password"><br>
			 <br>
			  <input type="text" name="phone_number" id="button" placeholder="Enter your phone number"><br>
			 <br>
			 <input type="radio" name="gender" id="rd"><span id="but">Male</span><input type="radio" name="gender" id="rd"><span id="but">Female</span><input type="radio" name="gender" id="rd"><span id="but">Other</span>
			 
			 <input type="submit" value="Register" id="butt"><br><br>
			 <label id="lab" for="form-switch">Already Member ? Sign In Now..</label> 
			 <h3><i><a href="login.php"></a><i></h3>
			 </form>
			 
	 </body>
</html>