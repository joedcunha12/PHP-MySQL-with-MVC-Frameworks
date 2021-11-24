<html>
<head>
<title>Store</title>
</head>
<body>
	<form method="post" action="<?php $_PHP_SELF ?>">
	<table width="600" border="1" cellspacing="1" cellpadding="2" style="border-collapse:collapse;">
	<tr><td width="250" colspan="2" align="center" > <b> Insert Product</b></td></tr>
	<tr>
	<td width="250">Product Name</td>
	<td><input name="product_name" type="text" id="product_name"></td>
	</tr>
	<tr>
	<td width="250">Price</td>
	<td><input name="price" type="text" id="price"></td>
	</tr>	
	<tr>
	<td width="250" colspan="2" align="center">	
		<input name="add" type="submit" id="add" value="Add Product">
	</td>
	</tr>
	</table>
	</form>
	
	<form method="post" action="<?php $_PHP_SELF ?>">
	<table width="600" border="1" cellspacing="1" cellpadding="2" style="border-collapse:collapse;">
	<tr><td width="250" colspan="2" align="center" > <b> Update product</b></td></tr>
	<tr>
	<td width="250">Product ID</td>
	<td><input name="product_id" type="text" id="product_id"></td>
	</tr>
	<tr>
	<td width="250">Price</td>
	<td><input name="price" type="text" id="price"></td>
	</tr>	
	<tr>
	<td width="250" colspan="2" align="center">	
		<input name="update" type="submit" id="udpate" value="Update Product">
	</td>
	</tr>
	</table>
	</form>
	
	<form method="post" action="<?php $_PHP_SELF ?>">
	<table width="600" border="1" cellspacing="1" cellpadding="2" style="border-collapse:collapse;">
	<tr><td width="250" colspan="2" align="center" > <b> Delete product</b></td></tr>
	<tr>
	<td width="250">Product ID</td>
	<td><input name="product_id" type="text" id="product_id"></td>
	</tr>
	<tr>
	<td width="250" colspan="2" align="center">	
		<input name="delete" type="submit" id="delete" value="Delete Product">
	</td>
	</tr>
	</table>
	</form>	
</body>
</html>
<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_password = "pass1234";
	$conn = mysql_connect($db_host,$db_user,$db_password);

	if(!$conn){
		die("Could not connect: " . mysql_error());
	}
	mysql_select_db('store');

if(isset($_POST['add'])){
	
	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	
	$sql = "INSERT INTO products ".
		   "(product_id,product_name,price) " .
			"values ('','$product_name','$price');";
			
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not add table " . mysql_error());
	}
	echo "Data saved successfully<br>";
	
}//end of isset post

if(isset($_POST['update'])){
	
	$product_id = $_POST['product_id'];
	$price = $_POST['price'];
	
	$sql = "UPDATE products ".
		   "SET price =  '$price' " .
		   "WHERE product_id = '$product_id';";
			
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not Save table " . mysql_error());
	}
	echo "Data saved successfully<br>";
	
}//end of isset post

if(isset($_POST['delete'])){
	
	$product_id = $_POST['product_id'];
	
	$sql = "DELETE FROM products ".
		   "WHERE product_id = '$product_id';";
			
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not Save table " . mysql_error());
	}
	echo "Data deleted successfully<br>";
	
}//end of isset post

$sql = "SELECT * FROM products order by product_name;";

$retval = mysql_query($sql,$conn);
if(!$retval){
	die("Could not Enter table " . mysql_error());
}
	echo "<table border=1 style='border-collapse:collapse;'>";
	echo "<tr>";
	echo "<td> Product ID </td>";
	echo "<td> Product Name</td>";
	echo "<td> Price </td>";
	echo "</tr>";
	while($row = mysql_fetch_array($retval,MYSQL_ASSOC)){
		echo "<tr>";
		echo "<td>{$row['product_id']}</td>";
		echo "<td> {$row['product_name']}</td>";
		echo "<td> {$row['price']} </td>";
		echo "</tr>";
	}
	echo "</table>";

mysql_close($conn);
?>