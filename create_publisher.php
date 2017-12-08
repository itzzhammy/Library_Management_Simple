<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE PUBLISHER (
name VARCHAR(20) PRIMARY KEY, 
address text NOT NULL,
phone text not null
)";

if ($conn->query($sql) === TRUE) {
    echo "Table PUBLISHER created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>