<?php


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="agri";



$conn=new mysqli($servername,$username,$password,$dbname);

	if (isset($_GET["crop_name"]))

 $crop_id=mysqli_real_escape_string($conn,$_POST["crop_id"]);
 if(isset($_GET["crop_id"]))
 $sql = "SELECT * FROM crop WHERE crop_id LIKE '%$crop_id%'";

$result=mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
  <!DOCTYPE html>
<head>
  <style>
table {
    border-collapse: collapse;
    width: 50%;
	position:absolute;
	top:30%;
	left:20%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	color:white;
}
</style>
</head>
<body  background="bin15.jpg">

<style>
#but {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	position:absolute;
	top:45%;
	left:60%;
}
#but1 {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	position:absolute;
	top:51%;
	left:60%;
}
</style>
<div style="margin-left:25%;padding:40px 40px 40px 120px;height:700px;" >

<?php 
 if(mysqli_num_rows($result) == 1)
					{
							echo "<h1 style='color:white;'>No such crop !!</h1>";
					}
					
					else
					{
							echo " <table >";
							echo "<tr> 
										<th>crop id</th>
										<th> crop name </th>
										<th> crop quantity </th>
										
										
							";
							while($row = mysqli_fetch_array($result) == 1) 
							{             
									echo "<tr>";
									echo "<td>" . $row['crop_id'] . "</td>"  ;
									echo "<td>" . $row['crop_name'] . "</td>"  ;
									echo "<td>" . $row['cquantity'] . "</td>"  ;
									
									echo "</tr>";
							} 
					}
   
  ?>
 </div>
 
</body>