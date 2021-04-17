<!DOCTYPE html>
<html>
<head>
	<title>Users' Site</title> 
</head>
<center><h1><i>VOTING <img src="vot.JPG" width="7%"> SYSTEM</i></h1></center><b>
<h2><center><i>VOTER REGISTRATION</i></center></h2><b>
<!--<a href="rental.php" style="float:; text-decoration: none; color: blue;"> DASHBOARD</a>-->

<hr color="black"></b><br>

<body oncontextmenu="return false" style="background-color:lightcyan;">
<form method="post" action="userv.php">
<center><fieldset align="center" style=" border-color: blue; width: 50%;border-radius: 40px;
  height: 90%; background-color: white; background-repeat: no-repeat; border-style:double; background-attachment: ;
">
<legend align="center" style="color: blue;"><img src ="AVA2.JPG" width="80"></legend><br>
<center><div style="background-color: orange; float: ; width: 50%">

<label>Voter Id:</label><br>
<input type="text" name="voter_id" title="use REG NO OR STAFF NO"><br><br>
<label>Voter Name:</label><br>
<input type="text" name="voter_name" ><br><br>

<table>
	<tr>
		<th style="color:red;"><i>Select the posts you will vote for !</i></th>
</tr>
<tr>
	<th>POST</th>
	<th>SELECT</th>
</tr>
<tr>
 <td>SCAI MALE NOMINEE </td> 
  <td><input type="checkbox" name=" scai_m" value="SCAI_M"></td>
</tr>
<tr>
 <td>SCAI FEMALE NOMINEE </td>
 <td><input type="checkbox" name=" scai_f" value="SCAI_F"></td>
</tr>
<tr>
 <td>SCAI ACADEMIC SECRETARY  </td>
 <td><input type="checkbox" name=" scai_a" value="SCAI_A"></td>
</tr>
	</table>

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