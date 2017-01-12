<?php

function connectdb()
{
$servername = "192.168.2.80:3306";;
$username = "root";
$password = "root";
$dbname = "program_outcome_attainment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

return $conn;
}

function closeConnection($input)
{
	
	$input->close();
}

?>