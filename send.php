<?php

$data = $_GET["x"];

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

$sql = "INSERT INTO direction (id, directions)
VALUES ('', '$data')";

if ($conn->query($sql) === TRUE) {
  echo "successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>