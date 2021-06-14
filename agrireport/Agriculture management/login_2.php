<?php
	$servername = "localhost";
		$username = "root";
		$password = '';
		$dbname = "agri";


	$conn=new mysqli($servername,$username,$password,$dbname);

	$user = mysqli_real_escape_string($conn, $_POST["username"]);
		$pass = mysqli_real_escape_string($conn, $_POST["password"]);
		
	   $sql="SELECT * FROM register WHERE username='$user' and password ='$pass'";
		$result=mysqli_query($conn,$sql);
		 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	if(mysqli_num_rows($result)===1)
	{
		echo "LOGIN SUCCESS";
		header("location:adminview1.php");

	}
	else
	{
		echo "failed" ;
	}
	$conn->close();

	?>
