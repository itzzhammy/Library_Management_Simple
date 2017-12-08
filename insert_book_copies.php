<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "library_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO BOOK_COPIES (bookId , branchId ,no_of_copies) VALUES (? , ?,?)");
$stmt->bind_param("sss",$bookId ,$branchId ,$no_of_copies);

$branchId = "10";
$no_of_copies = "10";
$stmt->execute();

$branchId = "20";
$no_of_copies = "16";
$stmt->execute();

$branchId = "30";
$no_of_copies = "21";
$stmt->execute();

$branchId = "10";
$no_of_copies = "14";
$stmt->execute();

$branchId = "70";
$no_of_copies = "13";
$stmt->execute();

$branchId = "60";
$no_of_copies = "42";
$stmt->execute();

$branchId = "50";
$no_of_copies = "15";
$stmt->execute();

$branchId = "10";
$no_of_copies = "15";
$stmt->execute();

$branchId = "90";
$no_of_copies = "21";
$stmt->execute();

$branchId = "100";
$no_of_copies = "10";
$stmt->execute();
echo " records created successfully";

$stmt->close();
$conn->close();
?>