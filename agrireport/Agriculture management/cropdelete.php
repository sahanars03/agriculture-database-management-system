<html>

<body>

    <?php
        $dbconn = mysqli_connect("localhost","root","","agri");
        mysqli_select_db($dbconn,'crop');
        $crop_id=$_GET["crop_id"];
        mysqli_query($dbconn,"DELETE FROM crop WHERE crop_id='$crop_id'");
        $affectedrows = mysqli_affected_rows($dbconn);
        if($affectedrows==1){
            header("Location:crop.php");
        }
    ?>
</body>
    
</html>