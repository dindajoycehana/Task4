<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root";

$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$sql="select * from user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();