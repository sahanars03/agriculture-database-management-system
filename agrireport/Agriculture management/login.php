<?php

$servername = "localhost";
		$username = "root";
		$password = '';
		$dbname = "agri";


	$conn=new mysqli($servername,$username,$password,$dbname);

$username = mysqli_real_escape_string($conn,$_POST['user']);
$mypassword = mysqli_real_escape_string($conn,$_POST['pass']);
 
if($username=="sahana" && $mypassword=="sahanars03")
{
	session_start();
	$_SESSION['username'] = $username;
	 //echo "success" ;
	 header("location:adminview.php");
}
else{
	echo "login Failed";
	echo "<br> <br><a href='alogform.php'> click here </a>";
}
mysqli_close($conn);

?>