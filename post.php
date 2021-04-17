<?php
include 'bk.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users' Site</title> 
</head>
<center><h1><i>VOTING <img src="vot.JPG" width="7%"> SYSTEM</i></h1></center><b>
<h2><center><i>POST REGISTRATION</i></center></h2><b>
<!--<a href="rental.php" style="float:; text-decoration: none; color: blue;"> DASHBOARD</a>-->

<hr color="black"></b><br>

<body oncontextmenu="return false" style="background-color:lightcyan;">
<form method="post" action="post1.php">
<center><fieldset align="center" style=" border-color: blue; width: 50%;border-radius: 40px;
  height: 90%; background-color: white; background-repeat: no-repeat; border-style:double; background-attachment: ;
">
<legend align="center" style="color: blue;"><img src ="AVA2.JPG" width="80"></legend><br>
<center><div style="background-color: orange; float: ; width: 50%">
<label>Post Code:</label><br>
<input type="text" name="post_code"><br><br>
<label>Post Name</label><br>
<input type="text" name="post_name">
<br><br>
 
     

<label>Faculty Code:</label><br>

<select name="faculty_code" style="width: 50%">
<?php
	 $sn=1;
	 $faculty_qry="select * from faculty ";
	 $faculty_res=mysqli_query($con, $faculty_qry);
	 
	 while($faculty_data=mysqli_fetch_assoc($faculty_res))
	 {
     ?>

<option> <?php echo $faculty_data['Faculty_Code']; ?></option>
<?php
		$sn++;
		}
		?> 
</select>
<br><br >

		
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