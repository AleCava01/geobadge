<?php
$host = "localhost";
$user = "root";
$password_conn = "";
$database = "Geobadge";
$conn = new mysqli($host, $user, $password_conn);
if ($conn->connect_errno) {
  echo "Connection failed: ". $conn->connect_error . ".";
  exit();
}
$conn->query("USE ".$database.";");
?>
