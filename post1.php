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
       
       
		$post_code=$_POST['post_code'];
		$post_name=$_POST['post_name'];
		$faculty_code=$_POST['faculty_code'];
		
		
               
		$sql="INSERT INTO post( Post_Code,Post_Name,Faculty_Code)
	    VALUES( '$post_code', '$post_name','$faculty_code')";

if ($conn->query($sql) === TRUE) {

	header('location: post.php');
	echo "post added";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>