<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Getting Values from HTML Page using Post Method and storing in Variables

$username=$_POST['username'];
$password=$_POST['password'];





$sql = "INSERT INTO admin(username,password)
VALUES ('".$username."','".($password)."')";

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>New record created successfully</h2>";
	echo  "<br><br><a href=admin.html>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>