<html>

<?php 
   include_once'database.php';
   $pass=$_POST['password'];
   
   
 $sql="select * from user where username='".$_POST['username']."' and password='".$pass."'";
 
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result,MYSQL_ASSOC);
 
 
 if(mysqli_num_rows($result)==1)
 {
	 echo "<script>
	 window.location.href='userlogin.php';
	 </script>";
	 
 }
 else
 {
	 echo "Username and password did not match";
 }
 ?>
 </html>