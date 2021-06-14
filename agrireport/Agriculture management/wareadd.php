<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
			color:white;
	background-image:url(wa1.jpeg);
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
	 background-color:#0c6996;;
	 border:2px solid #01010c;
	 color:aliceblue;
	 font-size:18px;
font-color:white;
}

	
</style>




	</head>
<html>

<body>
<a href="warehouse.php"><font color="Red">Home</font></a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    $selectwid="SELECT w_id FROM warehouse";
    $selectresult=mysqli_query($dbconn,$selectwid);
    
    
    if(isset($_GET['add'])){ 
        $w_id=$_GET["w_id"];
        $wname=$_GET["wname"];
        $capacity=$_GET["capacity"];
		$waddress=$_GET["waddress"];
		$crop_id=$_GET["crop_id"];
        
        $add="INSERT INTO warehouse VALUES('$w_id','$wname','$capacity','$waddress','$crop_id')";
        mysqli_query($dbconn,$add);
        $affectedrows = mysqli_affected_rows($dbconn);
        
        if($affectedrows==1){
                header("Location:warehouse.php");
        }
    }
   
    ?>
    <center>
	<style>
	
	</style>
    <h2>Add New warehouse</h2>
       <table>
	   
	   <form method="get" action="wareadd.php">
        
		
            <tr>
			<td><label for="w_id">warehouse id: </label></td>
            <td><input type="text" name="w_id"></td></tr>
            <br>
            <tr><td><label for="wname">warehouse name</label></td>
			 <td><input type="text" name="wname"></td></tr>
              <tr><td><label for="capacity">capacity</label></td>
			 <td><input type="text" name="capacity"></td></tr>
			 <tr><td><label for="waddress">warehouse address<label></td>
			 <td><input type="text" name="waddress"></td></tr>
			 <tr><td><label for="crop_id">crop id</label></td>
			 <td><input type="text" name="crop_id"></td></tr>
            <br>
			</table>
            <input type="submit" name="add" value="Add">
        </form>
            </center>
</body>
</html>