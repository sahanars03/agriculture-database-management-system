<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "agri";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$username = mysqli_real_escape_string($conn, $_POST["username"]);
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
		$gender = mysqli_real_escape_string($conn, $_POST["gender"]);
        
		
		
$sql = "INSERT INTO register(username,email,password,phone_number,gender) VALUES ('$username', '$email','$password','$phone_number', '$gender')";
	
	if ($conn->query($sql) == TRUE) 
		{
			header("location: ulogform.php");
		} 
		else 
		{
			header("location:registersuccess.php");
		}

	
		$conn->close();
?>