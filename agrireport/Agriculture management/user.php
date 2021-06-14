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

$uname=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$gender=$_POST['Gender'];
$category=$_POST['Category'];




$sql = "INSERT INTO user(username,email,phone,password, gender, category)
VALUES ('".$uname."','".$email."','".$phone."','".MD5($password)."','".$gender."','".$category."')";

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>New record created successfully</h2>";
	echo  "<br><br><a href=registerform.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>