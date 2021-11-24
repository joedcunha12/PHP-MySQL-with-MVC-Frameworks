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
	<br>
<?php	
	echo "<b>Products List </b> <br>";
	echo "<table border=1 style='border-collapse:collapse;'>";
	echo "<tr>";
	echo "<td> Product ID </td>";
	echo "<td> Product Name</td>";
	echo "<td> Price </td>";
	echo "</tr>";
	if(isset($products)){
		foreach($products as $row){
			echo "<tr>";
			echo "<td>{$row['Product']['product_id']}</td>";
			echo "<td> {$row['Product']['product_name']}</td>";
			echo "<td> {$row['Product']['price']} </td>";
			echo "</tr>";
		}//end of foreach
	}else{
		echo "<tr>";
		echo "<td colspan=3>No Records found</td>";
		echo "</tr>";
	}//end of if isset
	echo "</table>";	
?>