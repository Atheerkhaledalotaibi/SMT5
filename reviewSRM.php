<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ControlRobot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM direcion ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result === num_rows > 0) {
	while ($row = $result->fetch_assoc()){
        echo $row["direcions"];
		echo "<br>"; 
	} 
    }else {
    echo "0 results";
}

$conn->close();
?>