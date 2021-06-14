<!DOCTYPE html>
<html>
     <head>
        <style>
	
	
        
		body{
	color:white;
	background-image:url(sa1.jpg);
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
}

	
</style>



	</head>
<html>

<body>

     
<a href="soil.php">Home</a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    mysqli_select_db($dbconn,'soil');
    
    if(isset($_GET['update'])){ 
        $soil_id=$_GET["soil_id"];
        $soil_name=$_GET["soil_name"];
        $features=$_GET["features"];
		$crop_id=$_GET["crop_id"];
     
        $update_Query = "UPDATE soil SET soil_name='$soil_name', features='$features', crop_id='$crop_id' WHERE soil_id='$soil_id'";
        mysqli_query($dbconn,$update_Query);
        $affectedrows = mysqli_affected_rows($dbconn);

        if($affectedrows==1){
            header("Location:soil.php");
        }
    }else {
        $edit_soil_id = $_GET["soil_id"];
        $edit_Query="SELECT soil_name,features,crop_id FROM `soil` WHERE `soil_id`='$edit_soil_id'";
        $edit_Pass_Query = mysqli_query($dbconn, $edit_Query);
        $edit_Results = mysqli_fetch_assoc($edit_Pass_Query);    
        
    }
    ?>
   
 <center>
 <h2> Updating the soil:   </h2>
      <table>
        <form method="get" action="soiledit.php">
            <input type="hidden" name="soil_id" value="<?php echo $edit_soil_id?>">
           <tr><td> <label for="soil_name">soil Name: </label></td>
            <td><input type="text" name="soil_name"></td></tr>
            <br>
            <tr><td><label for="features">features: </label></td>
            <td><input type="text" name="features"></td></tr>
            <br>
			<tr><td><label for="crop_id">crop_id: </label></td>
            <td><input type="text" name="crop_id"></td></tr>
            <br>
			</table>
            <input type="submit" name="update" value="Save">
            
        </form>
		</center>
</body>
</html>