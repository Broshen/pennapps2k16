<?php
$servername = "[2607:f470:6:400f:d89e:d25c:fc45:ff74]";
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
$result = $conn->query("SELECT Date,sleep FROM usergoalcompletion where Date >= '{$_POST['start']}' and Date <= '{$_POST['end']}'");
if ($result) {
	echo '[';
    while($row = mysqli_fetch_assoc($result)) {
   		echo json_encode($row); 
	}
	echo ']';
    $result->close();
}
$conn->close();
?>