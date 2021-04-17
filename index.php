

<?php 
session_start();

define("alert", "Incorrect details!!!! Try Again!", true);

if (isset($_POST['login']))
{
	$db=mysqli_connect("localhost", "root", "", "e_voting");
$username = $_POST['username'];
$password =$_POST['password'];


$sql = "SELECT * FROM user WHERE username = '$username' AND password='$password' AND faculty ='SCAI'" ;
$result = mysqli_query($db, $sql);
$num = mysqli_num_rows($result);
if(mysqli_num_rows($result) ==1 )
	{
$_SESSION['message']="you are loged in";
$_SESSION['username']=$username;
header("location:vote.php");
echo "welcome";
   }

   else
$sql1 = "SELECT * FROM user WHERE username = '$username' AND password='$password' AND faculty ='ADMIN'" ;
$result1 = mysqli_query($db, $sql1);
$num = mysqli_num_rows($result);
if(mysqli_num_rows($result1) ==1 )
  {
header("location:admin.php");
$_SESSION['message']="you are logged in";
$_SESSION['username']=$username;
   }
else{
  echo alert;
 
	
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Users Login</title> 
</head>
<center><h1><i>VOTING <img src="vot.JPG" width="7%"> SYSTEM</i></h1></center><b>
<h2><center><i>SIGN IN</i></center></h2><b>
<hr color="black"></b><br>

<body oncontextmenu="return false" style="background-color:lightcyan;">
<form method="post" action="index.php">
<center>
<fieldset align="center" style=" border-color: blue; width: 50%;border-radius: 40px;
  height: 90%; background-color: white; background-repeat: no-repeat; border-style:double; background-attachment: ;
">
<legend align="center" style="color: blue;"><img src ="AVA2.JPG" width="80"></legend><br>
<center><div style="background-color: orange; float: ; width: 50%">

<label>Username:</label><br>
<input type="text" name="username"  title="use REG NO OR STAFF NO" placeholder="REG NUMBER" autofocus="true"><br><br>

<label>Password:</label><br>
<input type="password" name="password"  ><br><br >

</div></center>


<div style="position:center;"  align="center"><br>
<button type="submit" name="login"  style="background-color:  ; color: blue; ">Submit</button>
<input type="Reset" name="reset">
</div>
<center><p>If you don't have an account click  <a href="users.php" style="text-decoration: none;color: blue;">HERE</a>  to register</p></center>
</fieldset>
</div><br>
<center><center>&copy  VOTING SYSTEM. All right reserved. <?php echo date('D') ?> <?php echo date('d') ?>  <?php echo date('M') ?> <?php echo date('Y') ?> 
</form></center>
</body>
</html>