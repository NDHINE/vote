<!DOCTYPE html>
<html>
<head>
	<title>Users' Site</title> 
</head>
<center><h1><i>VOTING <img src="vot.JPG" width="7%"> SYSTEM</i></h1></center><b>
<h2><center><i>UNIVERSITY REGISTRATION</i></center></h2><b>
<!--<a href="rental.php" style="float:; text-decoration: none; color: blue;"> DASHBOARD</a>-->

<hr color="black"></b><br>

<body oncontextmenu="return false" style="background-color:lightcyan;">
<form method="post" action="userv.php">
<center><fieldset align="center" style=" border-color: blue; width: 50%;border-radius: 40px;
  height: 90%; background-color: white; background-repeat: no-repeat; border-style:double; background-attachment: ;
">
<legend align="center" style="color: blue;"><img src ="AVA2.JPG" width="80"></legend><br>
<center><div style="background-color: orange; float: ; width: 50%">

<label>Univesity Code:</label><br>
<input type="text" name="uni_code"  title="use ID number"><br><br>
<label>University Name:</label><br>
<input type="text" name="uni_name"  ><br><br>

<label>Location</label><br>
<input type="voter_id" name="location" ><br><br >
<label>Postal Code</label><br>
<input type="voter_id" name="postal_code"><br><br >
<label>Zip Code</label><br>
<input type="voter_id" name="zip_code" ><br><br >

</div></center>

<!--First name:<br>
<input type="text" name="firstname" value="John" disabled>-->
</fieldset></center><br>
<div style="position:center;"  align="center"><br>
<button type="submit" name=""  style="background-color:  ; color: blue; ">Submit</button>
<input type="Reset" name="">
</div><br>
<center><center>&copy  VOTING SYSTEM. All right reserved. <?php echo date('D') ?> <?php echo date('d') ?>  <?php echo date('M') ?> <?php echo date('Y') ?> 
</form></center>
</body>
</html>