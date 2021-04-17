<?php
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
       
       
		$faculty_name=$_POST['faculty_name'];
		$faculty_code=$_POST['faculty_code'];
		
		
               
		$sql="INSERT INTO faculty( Faculty_name, Faculty_Code)
	    VALUES( '$faculty_name', '$faculty_code')";

if ($conn->query($sql) === TRUE) {

	header('location: faculty.php');
	echo "you are registered";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>