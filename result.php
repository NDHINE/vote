<center><fieldset style="width: 50%;">
<?php
include 'bk.php';
?>

	<!DOCTYPE html>
		<html>
		<head>
	<meta http-equiv="refresh" content="1">
			<title>RESULTS OF ASPIRANTS</title>
		</head>
		<body>
		<table>
		<tr>
		<th style="color: blue;">MALE NOMINEE</th>	
		<th></th>
		<th></th>
		<th style="color: blue;">FEMALE NOMINEE</th>
			<th></th>
			<th></th>
		<th style="color: blue;"> <u>ACADEMIC SECRETARY</u></th>
		</tr>	

<tr>
<td>
  <?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI1' AND Aspirant_Code='123' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";

 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='123'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='123'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

print $count;

?>


<!-- <?php
		/*$sn++;*/
		}
		?>  -->


<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

  <?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI1' AND Aspirant_Code='1234' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";
 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='1234'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 

$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='1234'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

?>
<?php 
$votes="votes";
echo $count;
?>

<!-- <?php
		/*$sn++;*/
		}
		?>  -->

<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

	<?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI1' AND Aspirant_Code='12345' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";

 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='12345'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='12345'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

print $count;

?>


<!-- <?php
		/*$sn++;*/
		}
		?>  -->


<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

	 </td>	
<td></td>
<td></td>

<td>
  <?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI2' AND Aspirant_Code='321' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";

 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='321'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='321'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

print $count;

?>


<!-- <?php
		/*$sn++;*/
		}
		?>  -->


<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

  <?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI2' AND Aspirant_Code='4321' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";
 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='4321'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 

$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='4321'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

?>
<?php 
$votes="votes";
echo $count;
?>

<!-- <?php
		/*$sn++;*/
		}
		?>  -->

<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

	<?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI2' AND Aspirant_Code='54321' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";

 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='54321'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='54321'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

print $count;

?>


<!-- <?php
		/*$sn++;*/
		}
		?>  -->


<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

	 </td>	
<td></td>
<td></td>

<td>
  <?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI3' AND Aspirant_Code='678' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";

 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='678'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='678'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

print $count;

?>


<!-- <?php
		/*$sn++;*/
		}
		?>  -->


<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

  <?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI3' AND Aspirant_Code='6789' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";
 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='6789'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 

$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='6789'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

?>
<?php 
$votes="votes";
echo $count;
?>

<!-- <?php
		/*$sn++;*/
		}
		?>  -->

<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

	<?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='SCAI3' AND Aspirant_Code='456789' ";
	 $aspirant_res=mysqli_query($con, $aspirant_qry);
	 
	 while($aspirant_data=mysqli_fetch_assoc($aspirant_res))
	 {
     ?>


 <?php echo  $aspirant_data['First_Name'];?>  <?php echo $aspirant_data['Middle_Name'];?>  <?php echo $aspirant_data['surname'];?>
<?php
		$sn++;
		}
		?> 

<?php
 $vote="Has this number of votes:";

 echo "<h4>$vote</h4>";
 ?> 

<?php

	 $vote_qry="select * from vote where Aspirant_Code='456789'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='456789'";

 $sql_res=mysqli_query($con, $sql);
	 
$sql_data=mysqli_fetch_assoc($sql_res);

$count = $sql_data['votes'];

print $count;

?>


<!-- <?php
		/*$sn++;*/
		}
		?>  -->


<?php echo "<br/> ";?>
<?php echo "<br/> ";?>

	 </td>	
</tr>
		</table>
		</body>
		</html></fieldset></center>