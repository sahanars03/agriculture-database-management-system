<html>

<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "agri";
        $dbconn = mysqli_connect($host,$user,$pass,$db) or die("Could not connect to database!");
        mysqli_select_db($dbconn,'crop');
        $query="SELECT * FROM crop";
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

        <body style="; background-color:pink">
            <h1 style="text-align: center"><u>CROP TABLE</u></h1>
            <div class="row">
                <div class="col-2" style="text-align: left;background-color:pink">
               <h3 style="text-align:center;">options</h3>
	<ul>
	<li><a href="cropadd.php">Add</a></li>
	</ul>
			   
						
                    
                        
                        
                    
                </div>

                <div class="col-8" style="text-align: center;">
                    <table border="1" style="width: 100%; margin-top: 10px;">
                        <tr>
                            <th>crop id</th>
                            <th>crop name</th>
                            <th>crop quantity</th>
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
                                <td><?php echo $row['crop_id']?></td>
                                <td><?php echo $row['crop_name']?></td>
                                <td><?php echo $row['cquantity']?></td> 
								<td><p><a href="cropedit.php?crop_id=<?php echo $row['crop_id']?>">Edit</a>
								<a href="cropdelete.php?crop_id=<?php echo $row['crop_id']?>">Delete</a></p></td>
								
                            </tr>

                            <?php
                }
            ?>
                    </table>
                </div>
                       
            </div>
        </body>

        </html>