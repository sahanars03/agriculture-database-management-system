<html>

<body>

    <?php
        $dbconn = mysqli_connect("localhost","root","","agri");
        mysqli_select_db($dbconn,'soil');
        $soil_id=$_GET["soil_id"];
        mysqli_query($dbconn,"DELETE FROM soil WHERE soil_id='$soil_id'");
        $affectedrows = mysqli_affected_rows($dbconn);
        if($affectedrows==1){
            header("Location:soil.php");
        }
    ?>
</body>
    
</html>