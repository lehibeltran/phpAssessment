<?php
	include("db_connection.php");
	$byzip = $_POST["byzip"];

	$mysql = "SELECT * FROM store where zip='$byzip'";
	$result = $conn->query($mysql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Address" . $row["addresses"]. " - Zip " . $row["zip"] . "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>

<a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>