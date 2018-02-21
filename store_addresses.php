<?php
include("db_connection.php");
$name = $_POST["name"];
$addresses = $_POST["addresses"];
$zip = $_POST["zip"];

$mysql = "INSERT INTO store (name, addresses, zip)
VALUES ('$name', '$addresses', '$zip')";

if ($conn->query($mysql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $mysql . "<br>" . $conn->error;
}

$conn->close();

?>

<a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
