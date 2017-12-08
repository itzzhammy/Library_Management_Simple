<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE BORROWER (
cardNo INT(6) PRIMARY KEY, 
name VARCHAR(20) NOT NULL,
address text NOT NULL,
phone text not null
)";

if ($conn->query($sql) === TRUE) {
    echo "Table BORROWER created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
