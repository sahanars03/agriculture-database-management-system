<html>

<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "agri";
        $dbconn = mysqli_connect($host,$user,$pass,$db) or die("Could not connect to database!");
        mysqli_select_db($dbconn,'fertilizer');
        $query="SELECT * FROM fertilizer";
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

        <body style="; background-color:lightblue">
            <h1 style="text-align: center"><u>FERTILIZER TABLES</u></h1>
            <div class="row">
                <div class="col-2" style="text-align: left;background-color:lightblue">
                    <h3 style="text-align: center;">options</h3>
					<ul>
					<li><a href="fertadd.php">add</a></li>
					</ul
                    
                        
                        
                    
                </div>

                <div class="col-8" style="text-align: center;">
                    <table border="1" style="width: 100%; margin-top: 10px;">
                        <tr>
                            <th>fertilizer id</th>
                            <th>fertilizer name</th>
                            <th>fertilizer quantity</th>
                            <th>fertilizer rate</th>         
							<th>soil id</th>
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
                                <td><?php echo $row['f_id']?></td>
                                <td><?php echo $row['fname']?></td>
                                <td><?php echo $row['fquantity']?></td> 
								 <td><?php echo $row['frate']?></td>
                                <td><?php echo $row['soil_id']?></td>
                                <td><p><a href="fertedit.php?f_id=<?php echo $row['f_id']?>">Edit</a>
								<a href="fertdelete.php?f_id=<?php echo $row['f_id']?>">Delete</a></p></td>
								
                            </tr>

                            <?php
                }
            ?>
                    </table>
                </div>
                       
            </div>
        </body>

        </html>