
<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql2 = "ALTER table BOOK_LOANS add CONSTRAINT fcard foreign key(cardNo)
 REFERENCES BORROWER(cardNo)";

if ($conn->query($sql2) === TRUE) {
    echo "foreign key added";
} else {
    echo "Error alter table: " . $conn->error;
}

$conn->close();
?>