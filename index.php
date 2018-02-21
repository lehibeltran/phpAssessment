
<html>
<body>

<form action="store_addresses.php" method="post">
Name: <input type="text" name="name"><br>
Addresses: <input type="text" name="addresses"><br>
Zip: <input type="text" name="zip"><br>
<input type="submit">
</form>
<br>

<?php include("return_addresses.php"); ?>

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

