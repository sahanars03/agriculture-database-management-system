<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
color:black;
	background-image:url(seed5.jfif);
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
<a href="warehouse.php">Home</a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    mysqli_select_db($dbconn,'warehouse');
    
    if(isset($_GET['update'])){ 
        $w_id=$_GET["w_id"];
        $wname=$_GET["wname"];
        $capacity=$_GET["capacity"];
		$waddress=$_GET["waddress"];
		$crop_id=$_GET["crop_id"];
     
        $update_Query = "UPDATE warehouse SET wname='$wname', capacity='$capacity',waddress='$waddress',crop_id='$crop_id' WHERE w_id='$w_id'";
        mysqli_query($dbconn,$update_Query);
        $affectedrows = mysqli_affected_rows($dbconn);

        if($affectedrows==1){
            header("Location:warehouse.php");
        }
    }
	else 
	{
        $edit_w_id = $_GET["w_id"];
        $edit_Query="SELECT wname,capacity,waddress,crop_id FROM `warehouse` WHERE `w_id`='$edit_w_id'";
        $edit_Pass_Query = mysqli_query($dbconn, $edit_Query);
        $edit_Results = mysqli_fetch_assoc($edit_Pass_Query);    
        
    }
    ?>
  
 <center>
 <h2> Updating the warehouse:   </h2>
      <table>
        <form method="get" action="wareedit.php">
		   
            <input type="hidden" name="w_id" value="<?php echo $edit_w_id?>">

           <tr><td> <label for=wname">warehouse Name: </label></td>
            <td><input type="text" name="wname"></td></tr>
            <br>
            <tr><td><label for="capacity">capacity: </label></td>
            <td><input type="text" name="capacity"></td></tr>
            <br>
			 <tr><td> <label for="waddress"> warehouse address: </label></td>
            <td><input type="text" name="waddress"></td></tr>
            <br>
            <tr><td><label for="crop_id">crop id: </label></td>
            <td><input type="text" name="crop_id"></td></tr>
            <br>
			</table>
            <input type="submit" name="update" value="Save">
            
        </form>
		</center>
</body>
</html>