<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
	background-image:url(c11.jpeg);
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
<a href="crop.php">Home</a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    mysqli_select_db($dbconn,'crop');
    
    if(isset($_GET['update'])){ 
        $crop_id=$_GET["crop_id"];
        $crop_name=$_GET["crop_name"];
        $cquantity=$_GET["cquantity"];
     
        $update_Query = "UPDATE crop SET crop_name='$crop_name', cquantity='$cquantity' WHERE crop_id='$crop_id'";
        mysqli_query($dbconn,$update_Query);
        $affectedrows = mysqli_affected_rows($dbconn);

        if($affectedrows==1){
            header("Location:crop.php");
        }
    }else {
        $edit_crop_id = $_GET["crop_id"];
        $edit_Query="SELECT crop_name,cquantity FROM `crop` WHERE `crop_id`='$edit_crop_id'";
        $edit_Pass_Query = mysqli_query($dbconn, $edit_Query);
        $edit_Results = mysqli_fetch_assoc($edit_Pass_Query);    
        
    }
    ?>
    
 <center>
 <h2> Updating the crop:   </h2>
      <table>
        <form method="get" action="cropedit.php">
            <input type="hidden" name="crop_id" value="<?php echo $edit_crop_id?>">
           <tr><td> <label for="crop_name">crop Name: </label></td>
            <td><input type="text" name="crop_name"></td></tr>
            <br>
            <tr><td><label for="cquantity">quantity: </label></td>
            <td><input type="text" name="cquantity"></td></tr>
            <br>
			</table>
            <input type="submit" name="update" value="Save">
            
        </form>
		</center>
</body>
</html>