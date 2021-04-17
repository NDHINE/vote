<?php
include 'bk.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>aspirants' Site</title> 
</head>
<center><h1><i>VOTING <img src="vot.JPG" width="7%"> SYSTEM</i></h1></center><b>
<h2><center><i>ASPIRANT REGISTRATION</i></center></h2><b>
<!--<a href="rental.php" style="float:; text-decoration: none; color: blue;"> DASHBOARD</a>-->

<hr color="black"></b><br>

<body oncontextmenu="return false" style="background-color:lightcyan;">
<form method="post" action="aspirant1.php">
<center><fieldset align="center" style=" border-color: blue; width: 50%;border-radius: 40px;
  height: 90%; background-color: white; background-repeat: no-repeat; border-style:double; background-attachment: ;
">
<legend align="center" style="color: blue;"><img src ="AVA2.JPG" width="80"></legend><br>
<center><div style="background-color: orange; float: ; width: 50%">

<label>Aspirant Code:</label><br>
<input type="text" name="aspirant_code"  title="use ID number" autofocus=""><br><br>
<label>First Name:</label><br>
<input type="text" name="first_name"  ><br><br>
<label>Middle Name:</label><br>
<input type="text" name="middle_name"  ><br><br>
<label>Surname:</label><br>
<input type="text" name="surname"  ><br><br>
<label>Post Code:</label><br>
<select name="post_code" style="width: 50%">
<?php
	 $sn=1;
	 $post_qry="select * from post ";
	 $post_res=mysqli_query($con, $post_qry);
	 
	 while($post_data=mysqli_fetch_assoc($post_res))
	 {
     ?>

<option> <?php echo $post_data['Post_Code']; ?></option>
<?php
		$sn++;
		}
		?> 
</select>

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