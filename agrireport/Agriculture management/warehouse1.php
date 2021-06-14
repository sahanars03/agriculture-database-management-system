<html>

<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "agri";
        $dbconn = mysqli_connect($host,$user,$pass,$db) or die("Could not connect to database!");
        mysqli_select_db($dbconn,'warehouse');
        $query="SELECT * FROM warehouse";
        $result=mysqli_query($dbconn,$query);
        $rownum=mysqli_num_rows($result);
    ?>
        <!DOCTYE HTML>
        <html>

        <head>
            <meta charset="utf-8">
            <title> Framework Test page</title>
            <link href="asset/css/main.css" rel="stylesheet" type="text/css">
        </head>

        <body style="; background-color:red">
            <h1 style="text-align: center"><u>WAREHOUSE TABLES</u></h1>
            <div class="row">
                <div class="col-2" style="text-align: left;background-color:red">
                   
                <ul>
				<li><a href="warehouse1srch.php">SEARCH</a></li>
				</ul>    
                        
                        
                    
                </div>

                <div class="col-8" style="text-align: center;">
                    <table border="1" style="width: 100%; margin-top: 10px;">
                        <tr>
                            <th>warehouse id</th>
                            <th>warehouse name</th>
                            <th>capacity</th>
							<th>warehouse address</th>
							<th>crop id</th>
							
						                              
                            
                        </tr>
                        <style>
                            td {
                                text-align: center;
                            }
                        </style>
                        <?php
                while($row=mysqli_fetch_assoc($result)){
            ?>
                            <tr>
                                <td><?php echo $row['w_id']?></td>
                                <td><?php echo $row['wname']?></td>
                                <td><?php echo $row['capacity']?></td>  
								<td><?php echo $row['waddress']?></td>  
								<td><?php echo $row['crop_id']?></td>  

								  
                            </tr>

                            <?php
                }
            ?>
                    </table>
                </div>
                       
            </div>
        </body>

        </html>