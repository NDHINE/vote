<!DOCTYPE html>
<html>
<head>
	<title>Users' Site</title> 
</head>
<center><h1><i>VOTING <img src="vot.JPG" width="7%"> SYSTEM</i></h1></center><b>
<h2><center><i>SIGN UP</i></center></h2><b>
<!--<a href="rental.php" style="float:; text-decoration: none; color: blue;"> DASHBOARD</a>-->

<hr color="black"></b><br>

<body oncontextmenu="return false" style="background-color:lightcyan;">
<form method="post" action="Users1.php">
<center><fieldset align="center" style=" border-color: blue; width: 50%;border-radius: 40px;
  height: 90%; background-color: white; background-repeat: no-repeat; border-style:double; background-attachment: ;
">
<legend align="center" style="color: blue;"><img src ="AVA2.JPG" width="80"></legend><br>
<center><div style="background-color: orange; float: ; width: 50%">

<label>User ID:</label><br>
<input type="text" name="user_id" title="use ID Number" autofocus="" placeholder="ID NUMBER"><br><br>

<label>Username:</label><br>
<input type="text" name="username"  title="use REG NO OR STAFF NO" placeholder="REG NUMBER" ><br><br>
<label>Faculty</label><br>
<select name="faculty" style="width: 50%; opacity: 0.8;">
	<option></option>
	<option>SCAI</option>
	<option>FESS</option>
	<option>SOBE</option>
	<option>FS</option>
</select><br><br>
<label>Password:</label><br>
<input type="password" name="password"  ><br><br >

</div></center>

<!--First name:<br>
<input type="text" name="firstname" value="John" disabled>-->

<div style="position:center;"  align="center"><br>
<button type="submit" name=""  style="background-color:  ; color: blue; ">Submit</button>
<input type="Reset" name="">
<center><p>If you already have an account click  <a href="index.php" style="text-decoration: none;color: blue;">HERE</a>  to sign in</p></center>
</fieldset></center><br>
</div><br>
<center><center>&copy  VOTING SYSTEM. All right reserved. <?php echo date('D') ?> <?php echo date('d') ?>  <?php echo date('M') ?> <?php echo date('Y') ?> 
</form></center>
</body>
</html>