<!DOCTYPE html>
<html>
<head>
<body background="bin22.jpg">
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
		background-image:url("bin22.jpg");
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

  
  <li><a href="seed1.php">SEED</a></li>
  <li><a href="fertilizer1.php">FERTILIZER</a></li>
  <li><a href="pesticide1.php">PESTICIDE</a></li>
  <li><a href="warehouse1.php">WAREHOUSE</a></li>
  <li><a href="soil1.php">SOIL</a></li>
  <li><a href="crop1.php">CROP</a></li>
 <li><a href="welcome.php">LOGOUT</a></li>
 
</ul>
<ul><li>
</div>
</body>
</html>