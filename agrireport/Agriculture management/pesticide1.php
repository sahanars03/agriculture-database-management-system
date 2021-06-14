<html>

<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "agri";
        $dbconn = mysqli_connect($host,$user,$pass,$db) or die("Could not connect to database!");
        mysqli_select_db($dbconn,'pesticide');
        $query="SELECT * FROM pesticide";
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

        <body style="; background-color:orange">
            <h1 style="text-align: center"><u>PESTICIDE TABLES</u></h1>
            <div class="row">
                <div class="col-2" style="text-align: left;background-color:orange">
                    <h3 style="text-align: center;">
                  <ul>
				<li><a href="pesticide1srch.php">SEARCH</a></li>
				</ul>  
            	
                        
                    
                </div>

                <div class="col-8" style="text-align: center;">
                    <table border="1" style="width: 100%; margin-top: 10px;">
                        <tr>
                            <th>pesticide id</th>
                            <th>pesticide name</th>
                            <th>pesticide rate</th>
							<th>pesticide quantity</th>
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
                                <td><?php echo $row['p_id']?></td>
                                <td><?php echo $row['pname']?></td>
                                <td><?php echo $row['prate']?></td>  
								<td><?php echo $row['pquantity']?></td>  
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