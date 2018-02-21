<form action="" method="post">
	<input type="submit" value="return addresses">
<?php
if(isset($_POST)){
	include("db_connection.php");

	$mysql = "SELECT addresses FROM store";
	$result = $conn->query($mysql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Store Address: " . $row["addresses"]. " " . "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
}
?>
</form>