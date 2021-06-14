	<!DOCTYPE html>
<html>
     <head>
        
        <style>
		body{
	background-image:url(bin11.jpeg);
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
<a href="pesticide.php"><font color="Red">Home</font></a>
    <?php
    $dbconn = mysqli_connect("localhost","root","","agri");
    $selectpid="SELECT p_id FROM pesticide";
    $selectresult=mysqli_query($dbconn,$selectpid);
    
    
    if(isset($_GET['add'])){ 
        $p_id=$_GET["p_id"];
        $pname=$_GET["pname"];
        $prate=$_GET["prate"];
		$pquantity=$_GET["pquantity"];
		$crop_id=$_GET["crop_id"];
        
        $add="INSERT INTO pesticide VALUES('$p_id','$pname','$prate','$pquantity','$crop_id')";
        mysqli_query($dbconn,$add);
        $affectedrows = mysqli_affected_rows($dbconn);
        
        if($affectedrows==1){
                header("Location:pesticide.php");
        }
    }
   
    ?>
    <center>
	<style>
	
	</style>
    <h2>Add New pesticide</h2>
       <table>
	   
	   <form method="get" action="pestadd.php">
        
		
            <tr>
			<td><label for="p_id">pesticide id: </label></td>
            <td><input type="text" name="p_id"></td></tr>
            <br>
            <tr><td><label for="pname">pesticide name</label></td>
			 <td><input type="text" name="pname"></td></tr>
              <tr><td><label for="prate">pesticide rate</label></td>
			 <td><input type="text" name="prate"></td></tr>
			 <tr><td><label for="pquantity">pesticide quantity</label></td>
			 <td><input type="text" name="pquantity"></td></tr>
              <tr><td><label for="crop_id">crop id</label></td>
			 <td><input type="text" name="crop_id"></td></tr>
            <br>
			</table>
            <input type="submit" name="add" value="Add">
        </form>
            </center>
</body>
</html>