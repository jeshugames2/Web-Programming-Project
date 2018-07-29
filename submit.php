<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";

	$email = $_POST["email_id"];
	$pass= $_POST["password"];
	$name=$_POST["Name"];
	$age=$_POST["Age"];
	$address=$_POST["Address"];
	$city=$_POST["City"];
	$pin=$_POST["PIN"];
	$mob=$_POST["Mobile_Number"];

	// Create connection
$conn = new mysqli("$servername", "$username", "$password", "$dbname");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO details(email, password, name, age, address, city, pin, mobile)
VALUES ('$email', '$pass', '$name', '$age', '$address', '$city', '$pin', '$mob')";
if($conn->query($sql) === FALSE){
    echo "Error: " . $sql . "<br>" . $conn->error;
}
else
	echo "<script>location.href='home1.html'</script>";

?>
