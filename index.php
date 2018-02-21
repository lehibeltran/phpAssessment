
<html>
	<body>
		<form action="store_addresses.php" method="post">
			Name: <input type="text" name="name"><br>
			Addresses: <input type="text" name="addresses"><br>
			Zip: <input type="text" name="zip"><br>
			<input type="submit">
		</form>
		<br>
		<form action="index.php" method="post">
			<input type="submit" value="return addresses" name="submiting">
			<?php include 'return_addresses.php'; ?>
		</form>
		<br>
		<form action="lookup_name.php" method="post">
			Name: <input type="text" name="nameinput"><br>
			<input type="submit">
		</form>
		<br>
		<form action="lookup_zip.php" method="post">
			Zip: <input type="text" name="byzip"><br>
			<input type="submit">
		</form>
	</body>
</html>

