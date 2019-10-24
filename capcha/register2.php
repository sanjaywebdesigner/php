<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capcha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$firstname=$_POST['username'];
$lastname=$_POST['password'];

$sql = "INSERT INTO register (username, password)
VALUES ('$firstname', '$lastname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>