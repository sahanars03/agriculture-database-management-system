<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri";

// Create connection
$conn = mysqli_connect("localhost","root","","agri");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>