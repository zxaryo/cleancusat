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
$sql = "SELECT Trash, Value ,'Time' FROM trashcan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Trash"]. "[ " . $row["Time"]. " ] : " . $row["vqalue"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>