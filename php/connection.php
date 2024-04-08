<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "land";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Now you can perform database operations using $conn

// Close connection when done
$conn->close();
