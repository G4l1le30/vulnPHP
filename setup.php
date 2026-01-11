<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS vuln_sqli";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully or already exists<br>";
} else {
  echo "Error creating database: " . $conn->error . "<br>";
}

$conn->close();

$dbname = "vuln_sqli";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully or already exists<br>";
} else {
  echo "Error creating table: " . $conn->error . "<br>";
}

// Insert some data
$sql = "INSERT INTO users (username, password) VALUES ('admin', 'password123'), ('user', 'password456')";
if ($conn->query($sql) === TRUE) {
  echo "New records created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}


$conn->close();
?>
