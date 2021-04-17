
<!DOCTYPE html>
<html>
<head>
	<title>HOVER</title>

	<style type="text/css">
	body{
		background-image: url("jo.JPG");
		background-image-position:center; 
		background-size: cover;
		font-family: arial;
	}
		
ul{
	margin: 0px;
	padding: 0px;
list-style:none;
}
ul li{
	float: left;
	width: 200px;
	height: 40px;
	background-color: black;
	opacity: .7;
	line-height: 40px;
	text-align: center;
	list-style:none;
	font-size: 20px;
	margin-right: 3px;
}
ul li a{
	color: white;
	display: block;

	text-decoration: none;
}
ul li a:hover{

	background-color: darkblue;
}
ul li ul li{display: none;}
ul li:hover ul li{
	display: block;
}
a img li a{
	display: none;
	text-decoration: none;
}
	</style>


</head>
<center><h1><i>VOTING SYSTEM</i></h1></center><b>


<body style="background-color: darkgrey;">


<center>
<ul>
<li><a  >VIEW VOTES</a>
	<ul>
		<li><a href="result.php" >SCAI</a></li>
		<li><a href="resultfess.php">FESS</a></li>
		
		
		
		</ul>
	<!-- <li><a href="result.php">VIEW VOTES</a></li> -->
	<li><a  >ADMIN ROLES</a>
	<ul>
		<li><a href="faculty.php" >ADD FACULTY</a></li>
		<li><a href="post.php">ADD POST</a></li>
		<li><a href="aspirant.php">ADD ASPIRANT</a></li>
		
		
		</ul>
	</li>
	
	
</ul>

</div></center><br>
<hr color="black" width="100%"></b><br>
</body>
<center><footer style="bottom: 0px">&copy RENTAL  SYSTEM. <?php echo date('D') ?> <?php echo date('d') ?>  <?php echo date('M') ?> <?php echo date('Y') ?> </footer>
</html>