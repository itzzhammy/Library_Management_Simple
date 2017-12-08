<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE BOOK (
bookId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(20) NOT NULL,
publisherName VARCHAR(20) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table BOOK created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
