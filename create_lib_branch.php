<?php

$servername = "localhost";
$username = "k153619";
$password = '';
$dbname = "librarymanagementsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "create table LIBRARY_BRANCH(
branchId INT(6) PRIMARY KEY,
 branchName varchar(20) not null ,
address varchar(20) )";

if($conn->query($sql) == TRUE){
echo "Table LIBRARY_BRANCH created successfully";
}
else{
 echo "Error creating table: " . $conn->error;
}
$conn->close();
?>