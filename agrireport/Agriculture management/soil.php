<html>

<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "agri";
        $dbconn = mysqli_connect($host,$user,$pass,$db) or die("Could not connect to database!");
        mysqli_select_db($dbconn,'soil');
        $query="SELECT * FROM soil";
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

        <body style="; background-color:brown">
            <h1 style="text-align: center"><u>SOIL TABLES</u></h1>
            <div class="row">
                <div class="col-2" style="text-align: left;background-color:brown">
				<h3 style="text-align: center;">options</h3>
					<ul>
					<li><a href="soiladd.php">add</a></li>
					</ul>
                    
                    
                       
                        
                    
                </div>

                <div class="col-8" style="text-align: center;">
                    <table border="1" style="width: 100%; margin-top: 10px;">
                        <tr>
                            <th>soil id</th>
                            <th>soil name</th>
                            <th>features</th> 
                            <th>crop id</th>  
							<th>options</th>
                            
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
                                <td><?php echo $row['soil_id']?></td>
                                <td><?php echo $row['soil_name']?></td>
                                <td><?php echo $row['features']?></td>
								<td><?php echo $row['crop_id']?></td>
                                <td><p><a href="soiledit.php?soil_id=<?php echo $row['soil_id']?>">Edit</a>
								<a href="soildelete.php?soil_id=<?php echo $row['soil_id']?>">Delete</a></p></td>
								
                            </tr>

                            <?php
                }
            ?>
                    </table>
                </div>
                       
            </div>
        </body>

        </html>