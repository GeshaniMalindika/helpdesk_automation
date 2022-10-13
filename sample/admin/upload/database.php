<?php 
$hostname     = "localhost";
$username     = "root";
$password     = ""; 
$databasename = "helpdesk1"; 
// Create connection 
$conn = new mysqli($hostname, $username, $password,$databasename);
 // Check connection 
if ($conn->connect_error) { 
die("Unable to Connect database: " . $conn->connect_error);
 }
?>