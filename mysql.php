<?php
$servername = "[2607:f470:6:400f:599e:8ed8:756d:7c9]";
$username = "notroot";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$db_selected = mysqli_select_db($conn,'pennapps');
if (!$db_selected) {
    die('Could not select database: ' . mysql_error());
}
$result = $conn->query("SELECT * FROM usergoalcompletion");
if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
   		echo json_encode($row); 
	}
    $result->close();
}
$conn->close();

?>