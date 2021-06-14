	<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
	background-image:url(c10.jpg);
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
<a href="crop.php"><font color="Red">Home</font></a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    $selectcropid="SELECT crop_id FROM crop";
    $selectresult=mysqli_query($dbconn,$selectcropid);
    
    
    if(isset($_GET['add'])){ 
        $crop_id=$_GET["crop_id"];
        $crop_name=$_GET["crop_name"];
        $cquantity=$_GET["cquantity"];
		
        
        $add="INSERT INTO crop VALUES('$crop_id','$crop_name','$cquantity')";
        mysqli_query($dbconn,$add);
        $affectedrows = mysqli_affected_rows($dbconn);
        
        if($affectedrows==1){
                header("Location:crop.php");
        }
    }
   
    ?>
    <center>
	<style>
	
	</style>
    <h2>Add New crop</h2>
       <table>
	   
	   <form method="get" action="cropadd.php">
        
		
            <tr>
			<td><label for="crop_id">crop id: </label></td>
            <td><input type="text" name="crop_id"></td></tr>
            <br>
            <tr><td><label for="crop_name">crop name</label></td>
			 <td><input type="text" name="crop_name"></td></tr>
              <tr><td><label for="cquantity">crop quantity</label></td>
			 <td><input type="text" name="cquantity"></td></tr>
			 
			
            <br>
			</table>
            <input type="submit" name="add" value="Add">
        </form>
            </center>
</body>
</html>