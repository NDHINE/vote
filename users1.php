n<?php
    $host="localhost";
    $user="root";
	$password="";
	$dbname="e_voting";

	
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
       
       
		$user_id=$_POST['user_id'];
		$username=$_POST['username'];
		$faculty=$_POST['faculty'];
		$password=$_POST['password'];
		
               
		$sql="INSERT INTO user( user_id,username,faculty,password)
	    VALUES( '$user_id', '$username','$faculty', '$password')";

if ($conn->query($sql) === TRUE) {

	header('location: index.php');
	echo "you are succcesfully registered";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>