<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO BORROWER (cardNo ,name ,address ,phone) VALUES (?,?,?,?)");
$stmt->bind_param("ssss",$cardNo ,$name ,$address ,$phone);

$cardNo = "1";
$name = "MICHEAL";
$address = "A-1522";
$phone = "0341221223";
$stmt->execute();

$cardNo = "2";
$name = "ZEESHAN";
$address = "A-1543";
$phone = "0341224623";
$stmt->execute();

$cardNo = "3";
$name = "DUMMY";
$address = "A-5522";
$phone = "0333321223";
$stmt->execute();

$cardNo = "4";
$name = "Doe";
$address = "B-1522";
$phone = "034115364";
$stmt->execute();

$cardNo = "5";
$name = "Moe";
$address = "A-1332";
$phone = "0312111223";
$stmt->execute();

$cardNo = "6";
$name = "Dooley";
$address = "C-1522";
$phone = "0341221773";
$stmt->execute();

$cardNo = "7";
$name = "WARIS";
$address = "A-1511";
$phone = "0341521223";
$stmt->execute();

$cardNo = "8";
$name = "HASSAN";
$address = "D-1522";
$phone = "0325221223";
$stmt->execute();

$cardNo = "9";
$name = "MUHAMMAD";
$address = "A-1112";
$phone = "0341299993";
$stmt->execute();

$cardNo = "10";
$name = "ZAIN";
$address = "A-6922";
$phone = "0341699223";
$stmt->execute();
echo " records created successfully";

$stmt->close();
$conn->close();
?>