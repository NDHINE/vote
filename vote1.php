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
       
       
		$aspirant_code=$_POST['aspirant_code'];
		
		
               
		$sql="INSERT INTO vote( Aspirant_Code)
	    VALUES( '$aspirant_code')";

if ($conn->query($sql) === TRUE) {

	header('location: scaifemale.php');
	echo "you have voted";
	
} else {

	echo "vote not captured";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>