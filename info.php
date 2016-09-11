<?php
$servername = "[http://aef7b07e.ngrok.io]";
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
$result = $conn->query("SELECT * FROM usergoalcompletion where Date = '{$_POST['date']}'");
if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
   		echo json_encode($row); 
	}
    $result->close();
}
$conn->close();
?>