<?php
$servername = 'localhost';
$username = 'root';
$password = 'vertrigo';

// create connection
$conn = new mysqli($servername, $username, $password);
// check connection
if ($conn->connect_error)
{
	die("Connection failed: ".$conn->connect_error);
}

// create database
$sql = "CREATE DATABASE customers";
if ($conn->query($sql) === TRUE)
{
	echo "Database created successfully";
} else {
	echo "Error creating database: " .$conn->error;
}

$conn->close();
?>