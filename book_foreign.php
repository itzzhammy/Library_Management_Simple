<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "ALTER table BOOK  add CONSTRAINT fpublisher foreign key(publisherName)
 REFERENCES PUBLISHER(name)";

if ($conn->query($sql) === TRUE) {
    echo "foreign key added";
} else {
    echo "Error alter table: " . $conn->error;
}

$conn->close();
?>