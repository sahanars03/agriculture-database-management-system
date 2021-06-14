<html>

<body>

    <?php
        $dbconn = mysqli_connect("localhost","root","","agri");
        mysqli_select_db($dbconn,'pesticide');
        $p_id=$_GET["p_id"];
        mysqli_query($dbconn,"DELETE FROM pesticide WHERE p_id='$p_id'");
        $affectedrows = mysqli_affected_rows($dbconn);
        if($affectedrows==1){
            header("Location:pesticide.php");
        }
    ?>
</body>
    
</html>