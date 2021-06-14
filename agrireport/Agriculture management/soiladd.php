<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
			color:white;
	background-image:url(sa2.jpg);
	background-repeat:no-repeat;
	background-size:100% 700px;
}
form{
	margin-bottom:0 auto;
	width:300px;
	text-align:center;
	margin:100px 400px;
}
input{
    margin-bottom:0px;
	padding:10px;
	width:150px;
	border:2px solid #ccc;
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
	 background-color:white;;
	 border:2px solid #01010c;
	 color:white;
	 font-size:18px;
}

	
</style>




	</head>
<html>

<body>
<a href="soil.php"><font color="Red">Home</font></a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    $selectsoilid="SELECT soil_id FROM soil";
    $selectresult=mysqli_query($dbconn,$selectsoilid);
    
    
    if(isset($_GET['add'])){ 
        $soil_id=$_GET["soil_id"];
        $soil_name=$_GET["soil_name"];
        $features=$_GET["features"];
		$crop_id=$_GET["crop_id"];
        
        $add="INSERT INTO soil VALUES('$soil_id','$soil_name','$features','$crop_id')";
        mysqli_query($dbconn,$add);
        $affectedrows = mysqli_affected_rows($dbconn);
        
        if($affectedrows==1){
                header("Location:soil.php");
        }
    }
   
    ?>
    <center>
	<style>
	
	</style>
    <h2>Add New soil</h2>
       <table>
	   
	   <form method="get" action="soiladd.php">
        
		
            <tr>
			<td><label for="soil_id">soil id: </label></td>
            <td><input type="text" name="soil_id"></td></tr>
            <br>
            <tr><td><label for="soil_name">soil name</label></td>
			 <td><input type="text" name="soil_name"></td></tr>
              <tr><td><label for="features">features</label></td>
			 <td><input type="text" name="features"></td></tr>
			 <tr><td><label for="crop_id">crop id</label></td>
			 <td><input type="text" name="crop_id"></td></tr>
            <br>
			</table>
            <input type="submit" name="add" value="Add">
        </form>
            </center>
</body>
</html>