<?php

$servername = "localhost";
$username    = "root";
$password = "";
$DbName = "testsite";

// create connection
$conn = new mysqli($servername,$username,$password,$DbName);

//check connection
 if ($conn->connect_error)
 {
 	
 	 die("Connection fails: " . $conn->connect_error);
 }
?>