	<!DOCTYPE html>
<html>
     <head>
        <title>simple Registration form</title>	
        <style>
		body{
	background-image:url(sa.jpeg);
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

#button{
	width:250px;
	padding:10px;
	border-radius:5px;
	outline:0px;
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

	
</style>




	</head>
	 <body>
	    
		    
			<form action="login.php" method='post'>
	
			<h1>ADMIN LOGIN</h1>
			 <input type="text" name="user" id="button" placeholder="Enter your user name" required><br>
			 <br>
			 <input type="password" name="pass" value="pass" id="button" placeholder="Enter your password" required><br>
			 <br>
			 <input type="submit" value="Login" id="butt">
		    
			 
	
		
			 
				 </form>
				 </html>