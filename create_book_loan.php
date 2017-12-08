<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE BOOK_LOANS (
bookId INT(6) UNSIGNED AUTO_INCREMENT,
branchId INT(6),
cardNo INT(6) ,
dateOut date ,
dueDate date,
primary key(bookId,branchId,cardNo)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table BOOK_LOANS created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>