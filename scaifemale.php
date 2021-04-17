
<?php
include 'bk.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Voters' Site</title>
	<style type="text/css">
		td{}
	</style> 
</head>
<center><h1><i>VOTING <img src="vot.JPG" width="7%"> SYSTEM</i></h1></center><b>

<!--<a href="rental.php" style="float:; text-decoration: none; color: blue;"> DASHBOARD</a>-->

<hr color="black"></b><br>
<center><fieldset align="center" style=" border-color: blue; width: 50%; height: 100%; border-radius: 40px;
  height: ; background-color: white; background-repeat: no-repeat; border-style:double; background-attachment: ;
"><legend align="center" style="color: blue;"><h2><center>VOTE FOR YOUR PREFFERED ASPIRANTS</center></h2><b></legend><br>

<center><div style="background-color: orange; float: ; width: 50%;">
<body oncontextmenu="return false" style="background-color:lightcyan;">
<form method="post" action="vote3.php">

<u><h3 align="center">SCAI FEMALE NOMINEE</h3></u>
	<table>
	<tr>
		<th style="color:red;"><i>Select ONE aspirant !</i></th>
</tr>
<tr>
	<th>NAME</th>
	<th>SELECT</th>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI2' AND Aspirant_Code='321' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>
 <!--  VALUES('$recipient', concat('$subject',' ','$message',' ','$reccomendation'))"; -->

 <?php echo $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?>   </td> 
  <td><input type="radio" name="aspirant_code" value="321"></td>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI2' AND Aspirant_Code='4321' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>
 <!--  VALUES('$recipient', concat('$subject',' ','$message',' ','$reccomendation'))"; -->

 <?php echo $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?>   </td>
 <td><input type="radio" name="aspirant_code" value="4321"></td>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI2' AND Aspirant_Code='54321' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>
 <!--  VALUES('$recipient', concat('$subject',' ','$message',' ','$reccomendation'))"; -->

 <?php echo $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?>  </td>
 <td><input type="radio" name="aspirant_code" value="54321"></td>
</tr>
	</table>
	<button type="submit" name=""  style="background-color:  ; color: blue; ">Vote</button>

<hr>
</form>
