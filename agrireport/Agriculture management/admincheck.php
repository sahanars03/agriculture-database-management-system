<html>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri";

// Create connection
$conn = mysqli_connect("localhost","root","","agri");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$name=$_POST['username'];
   $pass=$_POST['password'];
   
   
 $sql="select * from admin where username=$name and passsword = $pass";
 
 $result=mysqli_query($conn,$sql);
 echo $name;
 echo "  ";
 echo $pass;
 $row=mysqli_fetch_assoc($result);
 
 
 if(mysqli_num_rows()==1)
 {
	 echo "<script>
	window.location.href='adminview.php';
	 </script>";
	
 }
 else
 {
	 echo "Username and password did not match";
 }
 ?>
 </html>