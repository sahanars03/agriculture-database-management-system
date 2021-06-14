<html>

<body>

    <?php
        $dbconn = mysqli_connect("localhost","root","","agri");
        mysqli_select_db($dbconn,'warehouse');
		if (isset($_GET["w_id"]))
        $w_id=$_GET["w_id"];
	if (isset($_GET["w_id"]))
        mysqli_query($dbconn,"DELETE FROM warehouse WHERE w_id='$w_id'");
        $affectedrows = mysqli_affected_rows($dbconn);
        if($affectedrows==1){
            header("Location:warehouse.php");
        }
    ?>
</body>
    
</html>