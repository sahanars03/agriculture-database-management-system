<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
 <fieldset>
      <legend>USER INFORMATION</legend>
	
	<center>

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

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table>";
	echo "  <tr>
    <th>Username</th>
    <th>email</th>
	<th>phone</th>
	<th>password</th>
	<th>gender</th>
    <th>Category</th>
  </tr>";
    while($row = mysqli_fetch_assoc($result)) {
	
	echo "<tr><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["password"]."</td><td>".$row["gender"]."</td><td>".$row["category"]."</td></tr>";
    }
	echo "</table>";
	
} else {
   
    echo "<h2>0 results</h2>";
	
}

mysqli_close($conn);
?>
</center>
</fieldset>
</html>