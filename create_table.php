<?php
include("db_connection.php");

// sql to create table
$mysql = "CREATE TABLE Store (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
addresses VARCHAR(50),
zip INT(10)
)";


if ($conn->query($mysql) === TRUE) {
    echo "Table Store created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>