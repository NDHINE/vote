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
<form method="post" action="vote2.php">



<br>
<u><h3 align="center">FESS FEMALE NOMINEE</h3></u>
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
	 $aspirant_qry="select * from aspirant where Post_code='FESS FEMALE' AND Aspirant_Code='ABC' ";
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
  <td><input type="radio"  name="aspirant_code" value="ABC"></td>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='FESS FEMALE' AND Aspirant_Code='ABCD' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?>  </td>
 <td><input type="radio"  name="aspirant_code" value="ABCD"></td>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='FESS FEMALE' AND Aspirant_Code='ABCDE' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?>  </td>
 <td><input type="radio"  name="aspirant_code" value="ABCDE"></td>
</tr>
	</table>
<button type="submit" name=""  style="background-color:  ; color: blue; ">Submit</button>

</form>
	<hr>

<form method="post" action="vote2.php">

<u><h3 align="center">FESS MALE NOMINEE</h3></u>
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
	 $aspirant_qry="select * from aspirant where Post_code='FESS MALE' AND Aspirant_Code='CBA' ";
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
  <td><input type="radio" name="aspirant_code" value="CBA"></td>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='FESS MALE' AND Aspirant_Code='DCBA' ";
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
 <td><input type="radio" name="aspirant_code" value="DCBA"></td>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='FESS MALE' AND Aspirant_Code='EDCBA' ";
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
 <td><input type="radio" name="aspirant_code" value="EDCBA"></td>
</tr>
	</table>
	<button type="submit" name=""  style="background-color:  ; color: blue; ">Submit</button>

<hr>
</form>

<form method="post" action="vote2.php">
<u><h3 align="center">FESS ACADEMIC SECRETARY</h3></u>
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
	 $aspirant_qry="select * from aspirant where Post_code='FESS ACADEMIC' AND Aspirant_Code='FGH' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>
 

 <?php echo $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?>  </td></td> 
  <td><input type="radio" name="aspirant_code" value="FGH"></td>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='FESS ACADEMIC' AND Aspirant_Code='FGHI' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?>  </td>
 <td><input type="radio" name="aspirant_code" value="FGHI"></td>
</tr>
<tr>
 <td><?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='FESS ACADEMIC' AND Aspirant_Code='FGHIJ' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?>  </td>
 <td><input type="radio" name="aspirant_code" value="FGHIJ"></td>
</tr>
	</table>
<button type="submit" name=""  style="background-color:  ; color: blue; ">Submit</button>
</div></center>



</fieldset></center><br>
<div style="position:center;"  align="center"><br>


</div><br>
</form></center>
<center><center>&copy  VOTING SYSTEM. All right reserved. <?php echo date('D') ?> <?php echo date('d') ?>  <?php echo date('M') ?> <?php echo date('Y') ?> 

</body>
</html>