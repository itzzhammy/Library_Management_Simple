<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO PUBLISHER (name,address,phone) VALUES (?, ? ,?)");
$stmt->bind_param("sss",  $name,$address, $phone);



$name = "MICHEAL";
$address = "A-1522";
$phone = "0341221223";
$stmt->execute();


$name = "ZEESHAN";
$address = "A-1543";
$phone = "0341224623";
$stmt->execute();


$name = "DUMMY";
$address = "A-5522";
$phone = "0333321223";
$stmt->execute();


$name = "Doe";
$address = "B-1522";
$phone = "034115364";
$stmt->execute();


$name = "Moe";
$address = "A-1332";
$phone = "0312111223";
$stmt->execute();


$name = "Dooley";
$address = "C-1522";
$phone = "0341221773";
$stmt->execute();


$name = "WARIS";
$address = "A-1511";
$phone = "0341521223";
$stmt->execute();

$name = "HASSAN";
$address = "D-1522";
$phone = "0325221223";
$stmt->execute();


$name = "MUHAMMAD";
$address = "A-1112";
$phone = "0341299993";
$stmt->execute();

$name = "ZAIN";
$address = "A-6922";
$phone = "0341699223";
$stmt->execute();
echo " records created successfully";

$stmt->close();
$conn->close();
?>