	<!DOCTYPE html>
<html>
     <head>
        <title>simple Registration form</title>	
        <style>
		body{
	background-image:url(bin7.jpg);
	background-repeat:no-repeat;
	background-size:100% 700px;
}
form{
	margin-bottom:0 auto;
	width:1500px;
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
	    
		    
			<form action="login_2.php" method=post>
	
			<h1>USER LOGIN</h1>
			 <input type="text" name="username" id="button" placeholder="Enter your user name" required><br>
			 <br>
			 <input type="password" name="password" id="button" placeholder="Enter your password" required><br>
			 <br>
			 <input type="submit" value="Login" id="butt">
			 <h3><i> click here to<a href="newreg.php">REGISTER</a><i></h3>
		    
			 
	
		
			 
				 </form>
				 </html>