<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE BOOK_COPIES (
bookId INT(6) UNSIGNED AUTO_INCREMENT,
branchId INT(10) , 
no_of_copies VARCHAR(20) not null,
primary key(bookId,branchId)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table BOOK_COPIES created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>