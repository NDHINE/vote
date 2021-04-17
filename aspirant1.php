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
		$first_name=$_POST['first_name'];
		$middle_name=$_POST['middle_name'];
		$surname=$_POST['surname'];
		$post_code=$_POST['post_code'];
               
		$sql="INSERT INTO aspirant(Aspirant_Code,First_Name,Middle_Name,surname,Post_code)
	    VALUES( '$aspirant_code', '$first_name','$middle_name', '$surname','$post_code')";

if ($conn->query($sql) === TRUE) {

	header('location: aspirant.php');
	echo "you are succcesfully registered";
	
} else {

	echo "you are not registered";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>