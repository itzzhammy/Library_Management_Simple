<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO BOOK_AUTHORS (bookId ,authorName) VALUES (?,?)");
$stmt->bind_param("sss",$bookId , $authorName);


$authorName = "WILLIAMS";
$stmt->execute();

$authorName = "WILLIAMS";
$stmt->execute();

$authorName = "ROE";
$stmt->execute();

$authorName = "MICKY";
$stmt->execute();

$authorName = "HARRY";
$stmt->execute();

$authorName = "POTER";
$stmt->execute();

$authorName = "LEE";
$stmt->execute();

$authorName = "BRUCE";
$stmt->execute();

$authorName = "HAMMY";
$stmt->execute();

$authorName = "TALHA";
$stmt->execute();
echo " records created successfully";

$stmt->close();
$conn->close();
?>