<!DOCTYPE html>
<html>
<head>
<body background="bin6.jpeg">
<div class="imagecontainer"> 
  </div>
</body>



<style>
*{
		margin:0;
		padding:0;
		font-family:verdana;
	}
	#main{
		width:100%;
		height:100vh;
		background-image:url("bin6.jpeg");
	background-size:cover;
	}
	nav{
		
		width:100%;
		height:80px;
		background-color:darkgreen;
		opacity:0.8;
		
		line-height:80px;
	}
	nav ul{
		float:left;
		marign-right:30px;
	}
	nav  ul li{
		list-style-type:none;
		display:inline-block;
		transition:0.5s all;
	}
	
	nav ul li:hover{
		background-color:black;
	}
	
	nav ul li a{
		text-decoration:none;
		color:white;
		padding:20px;
	}

		#logout
				{
						position:absolute;
						right:10px
				}
		
</style>
</head>
<body>
<div id="main">
<nav>
<ul>

  
  <li><a href="seed.php">SEED</a></li>
  <li><a href="fertilizer.php">FERTILIZER</a></li>
  <li><a href="pesticide.php">PESTICIDE</a></li>
  <li><a href="warehouse.php">WAREHOUSE</a></li>
  <li><a href="soil.php">SOIL</a></li>
  <li><a href="crop.php">CROP</a></li>
  <li><a href="welcome.php">LOGOUT</a></li>
 
  
</ul>
<ul><li>
</div>
</body>
</html>