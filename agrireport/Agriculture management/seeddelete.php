<html>

<body>

    <?php
        $dbconn = mysqli_connect("localhost","root","","agri");
        mysqli_select_db($dbconn,'seed');
        $seed_id=$_GET["seed_id"];
        mysqli_query($dbconn,"DELETE FROM seed WHERE seed_id='$seed_id'");
        $affectedrows = mysqli_affected_rows($dbconn);
        if($affectedrows==1){
            header("Location:seed.php");
        }
    ?>
</body>
    
</html>