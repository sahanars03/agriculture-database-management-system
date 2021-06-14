<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
color:white;
	background-image:url(se1.jpeg);
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
<a href="seed.php"><font color="Red">Home</font></a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    $selectseedid="SELECT seed_id FROM seed";
    $selectresult=mysqli_query($dbconn,$selectseedid);
    
    
    if(isset($_GET['add'])){ 
        $seed_id=$_GET["seed_id"];
        $seed_name=$_GET["seed_name"];
        $squantity=$_GET["squantity"];
		$seed_type=$_GET["seed_type"];
		$crop_id=$_GET["crop_id"];
        
        $add="INSERT INTO seed VALUES('$seed_id','$seed_name','$squantity','$seed_type','$crop_id')";
        mysqli_query($dbconn,$add);
        $affectedrows = mysqli_affected_rows($dbconn);
        
        if($affectedrows==1){
                header("Location:seed.php");
        }
    }
   
    ?>
    <center>
	<style>
	
	</style>
    <h2>Add New seed</h2>
       <table>
	   
	   <form method="get" action="seedadd.php">
        
		
            <tr>
			<td><label for="seed_id">seed id: </label></td>
            <td><input type="text" name="seed_id"></td></tr>
            <br>
            <tr><td><label for="seed_name">seed name</label></td>
			 <td><input type="text" name="seed_name"></td></tr>
              <tr><td><label for="squantity">seed quantity</label></td>
			 <td><input type="text" name="squantity"></td></tr>
			 <tr><td><label for="seed_type">seed type</label></td>
			 <td><input type="text" name="seed_type"></td></tr>
              <tr><td><label for="crop_id">crop id</label></td>
			 <td><input type="text" name="crop_id"></td></tr>
            <br>
			</table>
            <input type="submit" name="add" value="Add">
        </form>
            </center>
</body>
</html>