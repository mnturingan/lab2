<?php
$servername = "localhost";
$username = "webprogmi212";
$password = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

