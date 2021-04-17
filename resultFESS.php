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
		<th style="color: blue;">FEMALE NOMINEE</th>	
		<th></th>
		<th></th>
		<th style="color: blue;">MALE NOMINEE</th>
			<th></th>
			<th></th>
		<th style="color: blue;"> <u>ACADEMIC SECRETARY</u></th>
		</tr>	

<tr>
<td>
  <?php
	 $sn=1;
	 $aspirant_qry="select * from aspirant where Post_code='FESS FEMALE' AND Aspirant_Code='ABC' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='ABC'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='ABC'";

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
	 $aspirant_qry="select * from aspirant where Post_code='FESS FEMALE' AND Aspirant_Code='ABCD' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='ABCD'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 

$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='ABCD'";

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
	 $aspirant_qry="select * from aspirant where Post_code='FESS FEMALE' AND Aspirant_Code='ABCDE' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='ABCDE'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='ABCDE'";

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
	 $aspirant_qry="select * from aspirant where Post_code='FESS MALE' AND Aspirant_Code='CBA' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='CBA'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='CBA'";

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
	 $aspirant_qry="select * from aspirant where Post_code='FESS MALE' AND Aspirant_Code='DCBA' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='DCBA'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 

$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='DCBA'";

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
	 $aspirant_qry="select * from aspirant where Post_code='FESS MALE' AND Aspirant_Code='EDCBA' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='EDCBA'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='EDCBA'";

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
	 $aspirant_qry="select * from aspirant where Post_code='FESS ACADEMIC' AND Aspirant_Code='FGH' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='FGH'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='FGH'";

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
	 $aspirant_qry="select * from aspirant where Post_code='FESS ACADEMIC' AND Aspirant_Code='FGHI' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='FGHI'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 

$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='FGHI'";

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
	 $aspirant_qry="select * from aspirant where Post_code='FESS ACADEMIC' AND Aspirant_Code='FGHIJ' ";
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

	 $vote_qry="select * from vote where Aspirant_Code='FGHIJ'";
	 $vote_res=mysqli_query($con, $vote_qry);
	 
	 while($vote_data=mysqli_fetch_assoc($vote_res))
	 {

     ?>


<?php 
$sql="SELECT COUNT(Aspirant_Code) as votes
FROM vote
WHERE Aspirant_Code='FGHIJ'";

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