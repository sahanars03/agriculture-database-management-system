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
<a href="seed.php">Home</a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    mysqli_select_db($dbconn,'seed');
    
    if(isset($_GET['update'])){ 
        $seed_id=$_GET["seed_id"];
        $seed_name=$_GET["seed_name"];
        $squantity=$_GET["squantity"];
		$seed_type=$_GET["seed_type"];
		$crop_id=$_GET["crop_id"];
     
        $update_Query = "UPDATE seed SET seed_name='$seed_name', squantity='$squantity',seed_type='$seed_type',crop_id='$crop_id' WHERE seed_id='$seed_id'";
        mysqli_query($dbconn,$update_Query);
        $affectedrows = mysqli_affected_rows($dbconn);

        if($affectedrows==1){
            header("Location:seed.php");
        }
    }else {
        $edit_seed_id = $_GET["seed_id"];
        $edit_Query="SELECT seed_name,squantity,seed_type,crop_id FROM `seed` WHERE `seed_id`='$edit_seed_id'";
        $edit_Pass_Query = mysqli_query($dbconn, $edit_Query);
        $edit_Results = mysqli_fetch_assoc($edit_Pass_Query);    
        
    }
    ?>
  
 <center>
 <h2> Updating the seed:   </h2>
      <table>
        <form method="get" action="seededit.php">
            <input type="hidden" name="seed_id" value="<?php echo $edit_seed_id?>">
           <tr><td> <label for=seed_name">seed Name: </label></td>
            <td><input type="text" name="seed_name"></td></tr>
            <br>
            <tr><td><label for="squantity">seed quantity: </label></td>
            <td><input type="text" name="squantity"></td></tr>
            <br>
			 <tr><td> <label for=seed_type"> seed type: </label></td>
            <td><input type="text" name="seed_type"></td></tr>
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