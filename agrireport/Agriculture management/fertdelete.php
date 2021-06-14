<html>

<body>

    <?php
        $dbconn = mysqli_connect("localhost","root","","agri");
        mysqli_select_db($dbconn,'fertilizer');
        $f_id=$_GET["f_id"];
        mysqli_query($dbconn,"DELETE FROM fertilizer WHERE f_id='$f_id'");
        $affectedrows = mysqli_affected_rows($dbconn);
        if($affectedrows==1){
            header("Location:fertilizer.php");
        }
    ?>
</body>
    
</html>