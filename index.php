<?php

$servername = "https://trashcan-zxaryo.rhcloud.com/phpmyadmin/";
$username = "adminZDuamzp";
$password = "4KQT3jusvfge";
$dbname = "trashcan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO trashcan (Trash, Value) VALUES ('" . $_GET['sender'] . "', ". $_GET['value'] .")";

//echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>