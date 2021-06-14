<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
			color:black;
	background-image:url(fe1.jpeg);
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
<a href="pesticide.php">Home</a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    mysqli_select_db($dbconn,'agri');
    
    if(isset($_GET['update'])){ 
        $p_id=$_GET["p_id"];
        $pname=$_GET["pname"];
        $prate=$_GET["prate"];
		$pquantity=$_GET["pquantity"];
		$crop_id=$_GET["crop_id"];
     
        $update_Query = "UPDATE pesticide SET pname='$pname', prate='$prate', pquantity='$pquantity', crop_id='$crop_id' WHERE p_id='$p_id'";
        mysqli_query($dbconn,$update_Query);
        $affectedrows = mysqli_affected_rows($dbconn);

        if($affectedrows==1){
            header("Location:pesticide.php");
        }
    }else {
        $edit_p_id = $_GET["p_id"];
        $edit_Query="SELECT pname,prate,pquantity,crop_id FROM `pesticide` WHERE `p_id`='$edit_p_id'";
        $edit_Pass_Query = mysqli_query($dbconn, $edit_Query);
        $edit_Results = mysqli_fetch_assoc($edit_Pass_Query);    
        
    }
    ?>
   
 <center>
 <h2> Updating the pesticide:   </h2>
      <table>
        <form method="get" action="pestedit.php">
            <input type="hidden" name="p_id" value="<?php echo $edit_p_id?>">
           <tr><td> <label for="pname">pesticide Name: </label></td>
            <td><input type="text" name="pname"></td></tr>
            <br>
            <tr><td><label for="prate">pesticide rate: </label></td>
            <td><input type="text" name="prate"></td></tr>
            <br>
			<tr><td><label for="pquantity">pesticide quantity: </label></td>
            <td><input type="text" name="pquantity"></td></tr>
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