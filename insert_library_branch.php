<?php

$serverbranchName = "localhost";
$userbranchName = "k153619";
$password = '';
$dbbranchName = "librarymanagementsystem";

$conn = new mysqli($serverbranchName, $userbranchName, $password, $dbbranchName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO LIBRARY_BRANCH (branchId, branchName,address) VALUES (? ,?, ?)");

$stmt->bind_param("sss",$branchId , $branchName , $address);

$branchId = "10";
$branchName = "HADEED";
$address = "A1522";
$stmt->execute();

$branchId = "30";
$branchName = "JOHAR";
$address = "A1543";
$stmt->execute();

$branchId = "20";
$branchName = "KFC";
$address = "A5522";
$stmt->execute();

$branchId = "50";
$branchName = "3TALWAR";
$address = "B1522";
$stmt->execute();

$branchId = "40";
$branchName = "MURAD";
$address = "A1332";
$stmt->execute();

$branchId = "90";
$branchName = "KORANGI";
$address = "C1522";
$stmt->execute();

$branchId = "70";
$branchName = "WIRELEsS";
$address = "A1511";
$stmt->execute();

$branchId = "80";
$branchName = "AIRPORT";
$address = "D1522";
$stmt->execute();

$branchId = "100";
$branchName = "QUIADABAD";
$address = "A1112";
$stmt->execute();

$branchId = "60";
$branchName = "SHAHLATIFTOWN";
$address = "A6922";
$stmt->execute();
echo " records created successfully";

$stmt->close();
$conn->close();
?>