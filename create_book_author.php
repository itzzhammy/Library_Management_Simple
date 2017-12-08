<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE BOOK_AUTHORS (
bookId INT(6) UNSIGNED AUTO_INCREMENT, 
authorName VARCHAR(20) ,
primary key(bookId,authorName)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table BOOK_AUTHORS created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>