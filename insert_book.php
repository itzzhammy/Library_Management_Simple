<?php

$servername = "localhost";
$username = "k153618";
$password = "k153618";
$dbname = "library_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO BOOK (bookId,title, publisherName) VALUES (?, ?,?)");
$stmt->bind_param("sss",$bookId, $title, $publisherName);


$title = "CA";
$publisherName = "MICHEAL";
$stmt->execute();

$title = "DATABASE";
$publisherName = "ZEESHAN";
$stmt->execute();

$title = "TA";
$publisherName = "DUMMY";
$stmt->execute();

$title = "WEB";
$publisherName = "Doe";
$stmt->execute();

$title = "DESIGN";
$publisherName = "Moe";
$stmt->execute();

$title = "OOAD";
$publisherName = "Dooley";
$stmt->execute();

$title = "ARABIC";
$publisherName = "WARIS";
$stmt->execute();

$title = "ISL";
$publisherName = "HASSAN";
$stmt->execute();

$title = "URDU";
$publisherName = "MUHAMMAD";
$stmt->execute();

$title = "ARTICLE";
$publisherName = "ZAIN";
$stmt->execute();
echo " records created successfully";

$stmt->close();
$conn->close();
?>