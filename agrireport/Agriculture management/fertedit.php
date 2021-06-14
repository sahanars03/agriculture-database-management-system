<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
color:white;
	background-image:url(bin12.jpeg);
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
<a href="fertilizer.php">Home</a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    mysqli_select_db($dbconn,'fertilizer');
    
    if(isset($_GET['update'])){ 
        $f_id=$_GET["f_id"];
        $fname=$_GET["fname"];
        $fquantity=$_GET["fquantity"];
		$frate=$_GET["frate"];
		$soil_id=$_GET["soil_id"];
     
        $update_Query = "UPDATE fertilizer SET fname='$fname', fquantity='$fquantity',frate='$frate',soil_id='$soil_id' WHERE f_id='$f_id'";
        mysqli_query($dbconn,$update_Query);
        $affectedrows = mysqli_affected_rows($dbconn);

        if($affectedrows==1){
            header("Location:fertilizer.php");
        }
    }else {
        $edit_f_id = $_GET["f_id"];
        $edit_Query="SELECT fname,fquantity,frate,soil_id FROM `fertilizer` WHERE `f_id`='$edit_f_id'";
        $edit_Pass_Query = mysqli_query($dbconn, $edit_Query);
        $edit_Results = mysqli_fetch_assoc($edit_Pass_Query);    
        
    }
    ?>
    
 <center>
 <h2> Updating the fertilizer:   </h2>
      <table>
        <form method="get" action="fertedit.php">
            <input type="hidden" name="f_id" value="<?php echo $edit_f_id?>">
           <tr><td> <label for=fname">fertilizer Name: </label></td>
            <td><input type="text" name="fname"></td></tr>
            <br>
            <tr><td><label for="fquantity">fertilizer quantity: </label></td>
            <td><input type="text" name="fquantity"></td></tr>
            <br>
			 <tr><td> <label for=frate">fertilizer rate: </label></td>
            <td><input type="text" name="frate"></td></tr>
            <br>
            <tr><td><label for="soil_id">soil id: </label></td>
            <td><input type="text" name="soil_id"></td></tr>
            <br>
			</table>
            <input type="submit" name="update" value="Save">
            
        </form>
		</center>
</body>
</html>