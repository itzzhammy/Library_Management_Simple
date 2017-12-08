<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO BOOK (bookId , branchId, cardNo, dateOut, dueDate) VALUES (? ,? ,? ,? ,?)");
$stmt->bind_param("sssss",$bookId ,$branchId ,$cardNo ,$dateOut, $dueDate);

$branchId = "10";
$cardNo =  "2";
$dateOut = "Jan-10-1999";
$dueDate = "Jan-15-1999";
$stmt->execute();

$branchId = "100";
$cardNo =  "2";
$dateOut = "1999-08-01";
$dueDate = "1999-09-01";
$stmt->execute();

$branchId = "20";
$cardNo =  "5";
$dateOut = "1997-08-01";
$dueDate = "1998-08-01";
$stmt->execute();

$branchId = "80";
$cardNo =  "9";
$dateOut = "1996-08-01";
$dueDate = "1999-09-01";
$stmt->execute();

$branchId = "30";
$cardNo =  "5";
$dateOut = "2017-08-01";
$dueDate = "2018-08-01";
$stmt->execute();

$branchId = "50";
$cardNo =  "5";
$dateOut = "2016-08-01";
$dueDate = "2017-08-01";
$stmt->execute();

$branchId = "10";
$cardNo =  "10";
$dateOut = "2017-12-01";
$dueDate = "2018-08-01";
$stmt->execute();

$branchId = "100";
$cardNo =  "7";
$dateOut = "2015-08-01";
$dueDate = "2017-08-01";
$stmt->execute();

$branchId = "90";
$cardNo =  "3";
$dateOut = "2017-08-09";
$dueDate = "2018-08-09";
$stmt->execute();

$branchId = "80";
$cardNo =  "3";
$dateOut = "2017-08-22";
$dueDate = "2018-08-21";
$stmt->execute();
echo " records created successfully";

$stmt->close();
$conn->close();
?>